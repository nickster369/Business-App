<!--events_upcomingdates.php-->
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
    <main class="w3-container  w3-border-black w3-light-grey w3-border-bottom w3-border-top">
        <div class="w3-container">
            <article class="w3-full">
                <h2>Upcoming Dates</h2>
                <p>Here is a current list of our upcoming events for this year:</p>
                <h4>Friday, April 1, 2022</h4>
                <li>A talk on some of the more interesting Technology of the last 50 years.</li>
                <h4>Wednesday, April 20, 2022</h4>
                <li>A talk on the ins, outs of PC's.</li>
                <h4>Sunday, May 1, 2022</h4>
                <li>Demonstrations of Virtual Reality Technology.</li>
                <p>Note that all events will be held at our location at 7pm,
                    unless otherwise noted on this page at
                    least 24 hours before the event in question.
                    Further details on each event may also appear here
                    from time to time as the event approaches.</p>
            </article>
        </div>
    </main>
    <?php
    include '/home/course/u31/public_html/submissions/test/common/footer.html';
    ?>