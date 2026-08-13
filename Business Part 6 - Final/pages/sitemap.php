<?php
session_start();
include __DIR__ . '/../common/document_head.html';
?>

<body class=" body w3-auto ">
    <header class="w3-black">
        <?php
        include __DIR__ . '/../common/banner.php';
        include __DIR__ . '/../common/menus.html';
        ?>
    </header>
    <main class="body w3-border-black w3-border w3-light-grey  w3-center">
        <div class="w3-container w3-light-grey ">
            <div class="w3-half w3-padding">
                <ul class="w3-blue w3-ul">
                    <li>
                        <a href="/my_business.php" rel="external" hreflang="en" type="text/html">Home</a>
                    </li>
                </ul>
                <ul class="w3-blue w3-ul ">
                    <h4>E-store</h4>
                    <li class="w3-blue">
                        <a href="/pages/estore.php" rel="external" hreflang="en" type="text/html">
                            E-store options</a>
                    </li>
                    <li class=" w3-blue">
                        <a href="/pages/category.php" rel="external" hreflang="en" type="text/html">
                            Product Catalog</a>
                    </li>
                    <li class="w3-blue">
                        <a href="/pages/formRegistration.php" rel="external" hreflang="en" type="text/html">
                            Register</a>
                    </li>
                    <li class=" w3-blue">
                        <a href="/pages/formLogin.php" rel="external" hreflang="en" type="text/html">
                            Login</a>
                    </li>
                    <li class="w3-blue">
                        <a href="/pages/shoppingCart.php?productID=view" rel="external" hreflang="en" type="text/html">
                            Shopping Cart</a>
                    </li>
                    <li class=" w3-blue">
                        <a href="/pages/checkout.php" rel="external" hreflang="en" type="text/html">
                            Checkout</a>
                    </li>
                    <li class=" w3-blue">
                        <a href="/pages/logout.php" rel="external" hreflang="en" type="text/html">
                            Logout</a>
                    </li>
                </ul>
            </div>
            <div class="w3-half">
                <ul class=" w3-blue w3-ul ">
                    <h4>
                        Events
                    </h4>
                    <li class="w3-blue">
                        <a href="/pages/events_recurring.php" rel="external" hreflang="en" type="text/html">
                            Recurring</a>
                    </li>
                    <li class="w3-blue">
                        <a href="/pages/events_upcomingdates.php" rel="external" hreflang="en" type="text/html">
                            Upcoming Dates</a>
                    </li>
                    <li class=" w3-blue">
                        <a href="/pages/events_archived.php" rel="external" hreflang="en" type="text/html">
                            Archived</a>
                    </li>
                </ul>
                <ul class=" w3-blue w3-ul">
                    <h4>
                        About Us
                    </h4>
                    <li class=" w3-blue">
                        <a href="/pages/vision.php" rel="external" hreflang="en" type="text/html">
                            Vision and Mission</a>
                    </li>
                    <li class="w3-blue">
                        <a href="/pages/locations.php" rel="external" hreflang="en" type="text/html">
                            Locations</a>
                    </li>
                    <li class=" w3-blue">
                        <a href="/pages/formFeedback.php" rel="external" hreflang="en" type="text/html">
                            Tell Us What You Think</a>
                    </li>
                </ul>
                <ul class="w3-blue w3-ul ">
                    <li class=" w3-border-top w3-margin">
                        <a href="/pages/sitemap.php" rel="external" hreflang="en" type="text/html">Site Map</a>
                    </li>
                </ul>
            </div>
        </div>
    </main>

    <?php
    include __DIR__ . '/../common/footer.html';
    ?>
