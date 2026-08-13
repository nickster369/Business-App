<?php
/*catalogProcess.php*/
$categoryCode = $_GET['categoryCode'];
$query = "SELECT * FROM fv_product
                    WHERE catCode ='$categoryCode'
                   ORDER BY name ASC";
$categories = mysqli_query($db, $query);
$numRecords = mysqli_num_rows($categories);
echo
"<table class='w3-border-black w3-border' style='margin-left: auto; margin-right: auto;'>
<tr>
<th class='w3-border-bottom w3-border-black'>Product Image</th>
<th class='w3-border-bottom w3-border-black'>&nbsp;Product Name</th>
<th class='w3-border-bottom w3-border-black'>Price</th>
<th class='w3-border-bottom w3-border-black'>Stock</th>
<th class='w3-border-bottom w3-border-black'>&nbsp;Purchase?</th>
</tr>"
;
for ($i = 1; $i <= $numRecords; $i++) {
    $row = mysqli_fetch_array($categories, MYSQLI_ASSOC);
    $productImageFile = $row['image_file'];
    $productName = $row['name'];
    $productPrice = $row['price'];
    $productPriceAsString = sprintf("$%.2f", $productPrice);
    $productQuantity = $row['quantity'];
    $productID = $row['product_id'];
    echo "
    <tr>
    <td class='w3-center' ><img width='90' src='images/products/$productImageFile' alt='Product Image'
    </td>
    <td>
    $productName
    </td>
    <td>
    &nbsp;$productPriceAsString
    </td>
    <td class='w3-center'>
    $productQuantity
    </td>
    <td >
    <a class='w3-button w3-square w3-border w3-border-black w3-blue' href='pages/shoppingCart.php?productID=$productID'>Buy This Item</a>
    </td></tr>";   
}
echo'</table>';
echo'<a class="w3-button w3-blue w3-square w3-margin-top w3-margin-bottom w3-right w3-border w3-border-black"
 href="pages/category.php">
Return to Product Catalog</a>';
mysqli_close($db);
