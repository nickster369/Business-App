<?php
session_start();
include __DIR__ . '/../common/document_head.html';
?>

<body class="body w3-auto ">
    <header class="w3-black">
        <?php
        include __DIR__ . '/../common/banner.php';
        include __DIR__ . '/../common/menus.html';
        ?>
    </header>
    <main class="w3-container w3-border-top w3-border-bottom w3-border-black w3-light-grey">
        <div class="w3-container">
            <article class="w3-full">
                <h2>Recurring Events</h2>
                <p>Here are some typical kinds of events that we sponsor
                    on a recurring (but not regular or even frequent) basis:</p>
            </article>
            <ul>
                <li>
                    Talks on the most up to date technology.
                </li>
                <li>
                    Talks on the history and and future of the tech field.
                </li>
                <li>
                    Unveiling the top of the line technology.
                </li>
                <li>
                    Live demos of technology:
                </li>
                <ul style="padding-left:20px">
                    <li type="circle">Microsoft Surface book 3</li>
                    <li type="circle">Samsung Galaxy fold 3 </li>
                    <li type="circle">Apple Iphone 13 pro </li>
                    <li type="circle">Dyson V8 animal Vacuum cleaner </li>
                </ul>
            </ul>
        </div>
    </main>
    <?php
    include __DIR__ . '/../common/footer.html';
    ?>
