<?php
/*checkout.php
This page handles the user's checkout process at the highest-level,
if that user has come here from his or her shopping cart, and
otherwise the user is redirected to a view of the current status
of the user's shopping cart.
*/
session_start();
if (!preg_match('/shoppingCart.php/', $_SERVER['HTTP_REFERER']))
  header("Location: shoppingCart.php?productID=view");
$customerID = $_SESSION['customer_id'];
include '/home/course/u31/public_html/submissions/test/common/document_head.html';
?>

<body class="body w3-auto">
  <header class="w3-black">
    <?php
    include '/home/course/u31/public_html/submissions/test/common/banner.php';
    include '/home/course/u31/public_html/submissions/test/common/menus.html';
    include '/home/course/u31/public_html/submissions/test/scripts/connectToDatabase.php';
    ?>
  </header>
  <main class="w3-container">
    <article class="w3-container ">
      <?php
      include '/home/course/u31/public_html/submissions/test/scripts/checkoutProcess.php';
      ?>
    </article>
  </main>
  <footer>
    <?php
    include '/home/course/u31/public_html/submissions/test/common/footer.html';
    ?>
  </footer>