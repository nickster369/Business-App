<!--category.php-->
<?php
session_start();
include '/home/course/u31/public_html/submissions/test/common/document_head.html';
?>

<body class="body w3-auto" onload="carousel()">
    <header class="w3-black">
        <?php
        include '/home/course/u31/public_html/submissions/test/common/banner.php';
        include '/home/course/u31/public_html/submissions/test/common/menus.html';
        include '/home/course/u31/public_html/submissions/test/scripts/connectToDatabase.php';
        ?>
    </header>
    <main class="w3-container w3-border-black w3-light-grey w3-border-top w3-border-bottom">
        <div class="w3-half">
            <article>
                <h4>Complete List of
                    Product Catagories</h4>
                <?php
                include '/home/course/u31/public_html/submissions/test/scripts/categoryProcess.php';
                ?>
            </article>
        </div>
        <?php
        include '/home/course/u31/public_html/submissions/test/resources/images_and_labels_product_category.html';
        ?>
    </main>
    <?php
    include '/home/course/u31/public_html/submissions/test/common/footer.html';
    ?>