<!--locations.php-->
<?php
session_start();
include '/home/course/u31/public_html/submissions/test/common/document_head.html';
?>

<body class="body w3-auto">
    <header class="w3-black">
        <?php
        include '/home/course/u31/public_html/submissions/test/common/banner.php';
        include '/home/course/u31/public_html/submissions/test/common/menus.html';
        ?>
    </header>
    <main class="w3-container w3-border-black w3-light-grey w3-border-top w3-border-bottom">
        <div class="w3-container ">
            <article class="w3-full">
                <h2>
                    Our Locations
                </h2>
                <p>
                    As our company grows, we hope to expand world wide,
                    so eventually we will provide here a list of all our
                    store locations.
                    Each location will
                    be accompanied by contact information for that location and a link to a
                    map showing showing you how to find us at that location.
                </p>
                <p>
                    In the meantime, here are a few details
                    (just address and telephone number)
                    for our current (and only) location,
                    should you wish to drop by:
                </p>
                <p>
                    Future Vision, Inc.<br>
                    1234 Main Street<br>
                    Halifax,NS<br>
                    Canada B3H 8X8<br>
                    Tel: 902.423.1234
                </p>
            </article>
        </div>
    </main>
    <?php
    include '/home/course/u31/public_html/submissions/test/common/footer.html';
    ?>