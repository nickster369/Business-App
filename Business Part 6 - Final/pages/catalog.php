<!--catalog.php-->
<?php
session_start();
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
    <main class="w3-container w3-border-black w3-light-grey w3-border-top w3-border-bottom">
        <div class="w3-full">
            <article>
                <h2 class="w3-center">Product Catalog</h2>
                <?php
                include '/home/course/u31/public_html/submissions/test/scripts/catalogProcess.php';
                ?>
            </article>
        </div>
    </main>
    <?php
    include '/home/course/u31/public_html/submissions/test/common/footer.html';
    ?>