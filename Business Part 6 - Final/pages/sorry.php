<?php
session_start();
include __DIR__ . '/../common/document_head.html';
?>

<body class="body w3-auto">
    <header class="w3-black">
        <?php
        include __DIR__ . '/../common/banner.php';
        include __DIR__ . '/../common/menus.html';
        ?>
    </header>
    <main class="w3-container w3-border-black w3-light-grey w3-border-top w3-border-bottom">
        <div class="w3-container ">
            <article class="w3-full w3-center">
                <strong>
                    <h1>Sorry!</h1>
                </strong>
                <h1> This page has not yet been activated,<BR>
                    or has been temporarily deactivated.</h1>
            </article>
        </div>
    </main>
    <?php
    include __DIR__ . '/../common/footer.html';
    ?>
