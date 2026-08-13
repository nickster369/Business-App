<?php
/*shoppingCart.php
This page provides the "high-level" shopping cart view, if in
fact the visitor has a shopping cart. Otherwise the visitor is
redirected to the login page.
*/
session_start();
$customerID = isset($_SESSION['customer_id']) ? $_SESSION['customer_id'] : "";

$productID = $_GET['productID'];
if ($customerID == "") {
  $_SESSION['purchasePending'] = $productID;
  header("Location: formLogin.php");
}
include '/home/course/u31/public_html/submissions/test/common/document_head.html';
?>

<body class="w3-auto body">
  <header class="w3-black">
    <?php
    include '/home/course/u31/public_html/submissions/test/common/banner.php';
    include '/home/course/u31/public_html/submissions/test/common/menus.html';
    include '/home/course/u31/public_html/submissions/test/scripts/connectToDatabase.php';
    ?>
  </header>
  <main class="w3-container">
    <article class="w3-container w3-margin-bottom">
      <h4 class="w3-center"><strong>Your Shopping Cart</strong>
      </h4>
      <?php
      include '/home/course/u31/public_html/submissions/test/scripts/shoppingCartProcess.php';
      ?>
    </article>
  </main>
  <?php
  include '/home/course/u31/public_html/submissions/test/common/footer.html';
  ?>
</body>