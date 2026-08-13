<?php
session_start();
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
    <main class="w3-container w3-border-black w3-light-grey w3-border-top w3-border-bottom">
        <div class="w3-full">
            <article>
                <h2 class="w3-center">Product Catalog</h2>
                <?php
                include __DIR__ . '/../scripts/catalogProcess.php';
                ?>
            </article>
        </div>
    </main>
    <?php
    include __DIR__ . '/../common/footer.html';
    ?>
