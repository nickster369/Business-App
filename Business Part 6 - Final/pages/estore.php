<?php
session_start();
include __DIR__ . '/../common/document_head.html';
?>

<body class=" body w3-auto">
    <header class="w3-black">
        <?php
        include __DIR__ . '/../common/banner.php';
        include __DIR__ . '/../common/menus.html';
        ?>
    </header>
    <main class="w3-container w3-border-top w3-border-bottom w3-border-black w3-light-grey w3-black">
        <div class="w3-container ">
            <table class="w3-full w3-center">
                <strong>
                    <h2>Welcome to our e-store..thanks for visiting</h2>
                </strong>
                <p>
                    We carry a large collection of amazing tech. For your shopping and
                    browsing convenience, please choose on of the following links:
                </p>
                <ul>
                    <li>
                        <p>to browser our exciting product catalog
                            <a href="/pages/category.php" rel="external" hreflang="en" type="text/html">
                                click here.
                            </a>
                        </p>
                    </li>
                    <li>
                        <p>Ready to purchase and already have a username and password?
                            <br> To log in to our e-store and begin shopping
                            <a href="/pages/formLogin.php" rel="external" hreflang="en" type="text/html">
                                click here.</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            Need to register for our e-store so you can make purchases?
                            <br> To register (you only need to do it once)
                            <a href="/pages/formRegistration.php" rel="external" hreflang="en" type="text/html">
                                click here.</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            Trying to log in as a different user?<br>
                            You must first
                            <a href="/pages/logout.php" rel="external" hreflang="en" type="text/html">
                                click here to log out.</a>
                        </p>
                    </li>
                </ul>
            </table>
        </div>
    </main>
    <?php
    include __DIR__ . '/../common/footer.html';
    ?>
