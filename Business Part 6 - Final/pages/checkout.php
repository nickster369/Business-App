<?php
session_start();
if (!preg_match('/shoppingCart.php/', $_SERVER['HTTP_REFERER']))
  header("Location: /pages/shoppingCart.php?productID=view");
$customerID = $_SESSION['customer_id'];
include __DIR__ . '/../common/document_head.html';
?>

<body class="body w3-auto">
  <header class="w3-black">
    <?php
    include __DIR__ . '/../common/banner.php';
    include __DIR__ . '/../common/menus.html';
    include __DIR__ . '/../scripts/connectToDatabase.php';
    ?>
  </header>
  <main class="w3-container">
    <article class="w3-container ">
      <?php
      include __DIR__ . '/../scripts/checkoutProcess.php';
      ?>
    </article>
  </main>
  <footer>
    <?php
    include __DIR__ . '/../common/footer.html';
    ?>
  </footer>
