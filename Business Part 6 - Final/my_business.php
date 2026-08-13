<!--my_business.php for Future Vision, version 3 -->
<?php
session_start();
include __DIR__ . '/common/document_head.html';
?>

<body class="body w3-auto" onload="carousel()">
    <header class="w3-black">
        <?php
        include __DIR__ . '/common/banner.php';
        include __DIR__ . '/common/menus.html';
        ?>
    </header>
    <main class="w3-container w3-border-top w3-border-black w3-light-grey">
        <div class="w3-container">
            <article class="w3-half">
                <h3>
                    You've come to Future Vision
                </h3>
                <p>
                    Founded in 2022, Future Vision was created to unveil
                    the tech of tomorrow, today.
                    we specialize in selling technology ranging
                    from cell phones, televisions, computer monitors, tablets and much more.
                    we also organize events to unveil new tech.
                </p>
                <p> Check out our E-store for unbeatable
                    prices on everyday technology and events
                    tab where you can see our next and
                    past scheduled unveiling of tomorrows tech.</p>
            </article>
            <?php
            include __DIR__ . '/resources/images_and_labels.html';
            ?>
        </div>

    </main>
    <?php
    include __DIR__ . '/common/footer.html';
    ?>
