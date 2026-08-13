<?php
/*checkoutProcess.php
Displays a receipt to confirm the client's purchase(s)
and adjusts the database inventory levels accordingly.
Has a very short main driver, but uses eight helper
functions, all of which are defined below.
Calls displayReceipt() once, which in turn calls
--getExistingOrder() once
--displayReceiptHeader() once
--displayItemAndReturnTotalPrice() once for each item in the order
--displayReceiptFooter() once
Calls markOrderPaid() once
Calls markOrderItemsPaid() once, which in turn calls
--reduceInventory() once for each item in the order
*/
//error_reporting(E_ALL);

//========== main script begins here
displayReceipt($db, $customerID);

//Get the order ID for the order in progress
$query =
  "SELECT
        fv_Order.order_id,
        fv_Order.customer_id,
        fv_Order.order_status,
        fv_OrderItem.*
    FROM
    fv_OrderItem, fv_Order
    WHERE
    fv_Order.order_id = fv_OrderItem.order_id and
    fv_Order.order_status = 'IP'        and
    fv_Order.customer_id = $customerID";
$orderInProgress = mysqli_query($db, $query);
$orderInProgressArray = mysqli_fetch_array($orderInProgress);
$orderID = $orderInProgressArray[0];

//Now mark as paid both the order itself and its order items 
markOrderPaid($db, $customerID, $orderID);
markOrderItemsPaid($db, $orderID);
mysqli_close($db);
//========== main script ends here

/*displayReceipt()
The "driver" routine for preparing and displaying a receipt
for the items purchased in the current order being checked out.
*/
function displayReceipt($db, $customerID)
{

  $items = getExistingOrder($db, $customerID);
  $numRecords = mysqli_num_rows($items);
  if ($numRecords == 0) {

    echo
    "
        <main class='w3-container w3-margin-bottom'
        <article class='w3-container'>
        <h4 class='w3-center'>
        <strong>Your Shopping Cart<br></strong>
        <h4 class='w3-center'>Your shopping cart is empty.</h4>
        <h4 class='w3-center'> To continue shopping, please
        <a class='w3-center' href='pages/category.php'>click
        here</a></h4>
    </article>
    </main>";
    include '/home/course/u31/public_html/submissions/test/common/footer.html';

    exit(0);
  } else {
    displayReceiptHeader();
    $grandTotal = 0;
    for ($i = 1; $i <= $numRecords; $i++) {
      $row = mysqli_fetch_array($items, MYSQLI_ASSOC);
      $grandTotal += displayItemAndReturnTotalPrice($db, $row);
    }
    displayReceiptFooter($grandTotal);
  }
}

/*getExistingOrder()
Gets and returns the purchased items in the order
being checked out.
*/
function getExistingOrder($db, $customerID)
{
  $query =
    "SELECT
            fv_Order.order_id,
            fv_Order.customer_id,
            fv_Order.order_status,
            fv_OrderItem.*
        FROM
        fv_OrderItem, fv_Order
        WHERE
        fv_Order.order_id = fv_OrderItem.order_id and
        fv_Order.order_status = 'IP' and
        fv_Order.customer_id = '$customerID'";
  $items = mysqli_query($db, $query);
  return $items;
}

/*displayReceiptHeader()
Displays user information and the date, as well as column
headers for the table of purchased items.
*/
function displayReceiptHeader()
{
  $date = date("F j, Y");
  $time = date('g:ia');
  echo
  "<p class='w3-center'>***** R E C E I P T *****</p>
    <p class='w3-center'>
      Payment received from
      $_SESSION[salutation]
      $_SESSION[first_name]
      $_SESSION[middle_initial]
      $_SESSION[last_name] on $date at $time.
    </p>";
  echo
  "<table style= 'overflow-x:auto'class='w3-table w3-border w3-border-black w3-margin-bottom'>
      <tr>
        <th>Product Image</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
      </tr>";
}

/*displayItemAndReturnTotalPrice()
Displays one table row containing the information for
one purchased item.
*/
function displayItemAndReturnTotalPrice($db, $row)
{
  $productID = $row['product_id'];
  $query = "SELECT * FROM fv_product WHERE product_id ='$productID'";
  $product = mysqli_query($db, $query);
  $rowProd = mysqli_fetch_array($product, MYSQLI_ASSOC);
  $productPrice = $rowProd['price'];
  $productPriceAsString = sprintf("$%1.2f", $productPrice);
  $totalPrice = $row['quantity'] * $row['price'];
  $totalPriceAsString = sprintf("$%1.2f", $totalPrice);
  $imageLocation = $rowProd['image_file'];
  echo
  "<tr>
      <td class='w3-center'>
        <img width='70'
             src='images/products/$imageLocation' alt='Product Image'>
      </td><td class='LeftAligned'>
        $rowProd[name]
      </td><td class='w3-right-align'>
        $productPriceAsString
      </td><td class='w3-center'>
        $row[quantity]
      </td><td class='w3-right-align'>
        $totalPriceAsString
      </td>
    </tr>";
  return $totalPrice;
}

/*displayReceiptFooter()
Displays the total amount of the purchase and additional
information in the footer of the receipt.
*/
function displayReceiptFooter($grandTotal)
{
  $grandTotalAsString = sprintf("$%1.2f", $grandTotal);
  echo
  "<tr>
      <td class='w3-center' colspan='4'>
        Grand Total
      </td><td class='w3-right-align'>
        <strong>$grandTotalAsString</strong>
      </td>
    </tr><tr>
      <td colspan='5'>
        <p class='w3-center'>Your order has been processed.
        <br>Thank you very much for shopping with Future Vision.
        <br>We appreciate your purchase of the above product(s).
        <br>You may print a copy of this page for your permanent record.
        <br>To return to our e-store options page please
          <a href='pages/estore.php'>click here</a>.
        </p>
          
      </td>
    </tr>
  </table>";
}

/*markOrderPaid()
Changes the status in the database of the order being checked
out from IP (in progress) to PD (paid).
*/
function markOrderPaid($db, $customerID, $orderID)
{
  $query =
    "UPDATE fv_Order
        SET order_status = 'PD'
        WHERE customer_id = '$customerID' and
              order_id ='$orderID'";
  $success = mysqli_query($db, $query);
}

/*markOrderItemsPaid()
Changes the status in the database of each item purchased
from IP (in progress) to PD (paid).
*/
function markOrderItemsPaid($db, $orderID)
{
  $query = "SELECT *
        FROM fv_OrderItem
        WHERE order_id = '$orderID'";
  $orderItems = mysqli_query($db, $query);
  if ($orderItems != null)
    $numRecords = mysqli_num_rows($orderItems);
  else {
    echo "Error: SELECT failure in markOrderItemsPaid in checkoutProcess";
    exit(0);
  }
  for ($i = 1; $i <= $numRecords; $i++) {
    $row = mysqli_fetch_array($orderItems, MYSQLI_ASSOC);
    $query =
      "UPDATE fv_OrderItem
            SET order_item_status = 'PD'
            WHERE order_item_id = $row[order_item_id] and
                  order_id = $row[order_id]";
    $success = mysqli_query($db, $query);
    if (!$success) {
      "Error: UPDATE failure in markOrderItemsPaid in checkoutProcess";
      exit(0);
    }
    reduceInventory(
      $db,
      $row['product_id'],
      $row['quantity']
    );
  }
}

/*reduceInventory()
Reduces the inventory level in the database of the product
purchased by the amount purchased.
*/
function reduceInventory($db, $productID, $quantityPurchased)
{
  $query = "SELECT * FROM fv_product WHERE product_id = '$productID'";
  $product = mysqli_query($db, $query);
  $row = mysqli_fetch_array($product, MYSQLI_ASSOC);
  $row['quantity'] -= $quantityPurchased;
  $query =
    "UPDATE fv_product
        SET quantity = $row[quantity]
        WHERE product_id = $row[product_id]";
  mysqli_query($db, $query);
}
