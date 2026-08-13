<!--formRegistrationResponse.php-->
<?php
include('/home/course/u31/public_html/submissions/test/common/document_head.html');
?>

<body class="body w3-auto">
    <header class="w3-black">
        <?php
        include('/home/course/u31/public_html/submissions/test/common/banner.php');
        include('/home/course/u31/public_html/submissions/test/common/menus.html');
        include('/home/course/u31/public_html/submissions/test/scripts/connectToDatabase.php');
        ?>
    </header>
    <main>
        <article class="Registration">
            <?php
            include('/home/course/u31/public_html/submissions/test/scripts/formRegistrationProcess.php');
            ?>
        </article>
    </main>
    <footer>
        <?php
        include('/home/course/u31/public_html/submissions/test/common/footer.html');
        ?>
    </footer>
</body>