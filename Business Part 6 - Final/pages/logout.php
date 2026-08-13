<!--logout.php-->
<?php
session_start();
$loggedInAtTheStart = isset($_SESSION['customer_id']) ? true : false;
if ($loggedInAtTheStart) {

    $customerID = $_SESSION['customer_id'];
    include '/home/course/u31/public_html/submissions/test/scripts/connectToDatabase.php';
    include '/home/course/u31/public_html/submissions/test/scripts/logoutProcess.php';
    session_unset();
    session_destroy();
}
include("/home/course/u31/public_html/submissions/test/common/document_head.html");
?>

<body class="body w3-auto">
    <header class="w3-black">
        <?php
        include("/home/course/u31/public_html/submissions/test/common/banner.php");
        include("/home/course/u31/public_html/submissions/test/common/menus.html");
        ?>
    </header>
    <main class="w3-container w3-border-black w3-light-grey w3-border-top w3-border-bottom">
        <div class="w3-container ">
            <article class="w3-full">
                <h4>Logout</h4>
                <?php
                if ($loggedInAtTheStart) {
                    echo
                    '<p>Thank you for visiting our e-store.<br>
               You have successfully logged out.</p>
               <p>if you wish to log back in, 
               <a href="pages/formLogin.php">click here</a>.</p>
               <p>To browse our product catalog,
                <a 
                href="pages/category.php">click here</a>.</p>';
                } else {
                    echo
                    '<p> Thank you for visiting Future Vision.
                     You have not yet logged in.</p>
                    <p>If you do wish to log in, 
                    <a href="pages/formLogin.php">click here</a>.</p>
                    <p>Or you can browse our product catalog without logging in by
                    <a
                    href="pages/category.php">clicking here</a>.</p>';
                }
                ?>
            </article>
        </div>
    </main>
    <?php
    include("/home/course/u31/public_html/submissions/test/common/footer.html");
    ?>