<?php
session_start();
$customerID = isset($_SESSION['customer_id']) ? $_SESSION['customer_id'] : "";

$productID = $_GET['productID'];
if ($customerID == "") {
  $_SESSION['purchasePending'] = $productID;
  header("Location: /pages/formLogin.php");
}
include __DIR__ . '/../common/document_head.html';
?>

<body class="w3-auto body">
  <header class="w3-black">
    <?php
    include __DIR__ . '/../common/banner.php';
    include __DIR__ . '/../common/menus.html';
    include __DIR__ . '/../scripts/connectToDatabase.php';
    ?>
  </header>
  <main class="w3-container">
    <article class="w3-container w3-margin-bottom">
      <h4 class="w3-center"><strong>Your Shopping Cart</strong>
      </h4>
      <?php
      include __DIR__ . '/../scripts/shoppingCartProcess.php';
      ?>
    </article>
  </main>
  <?php
  include __DIR__ . '/../common/footer.html';
  ?>
</body>
