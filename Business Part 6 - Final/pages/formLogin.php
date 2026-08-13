<?php
session_start();
if (isset($_SESSION['customer_id'])) {
    header('Location: /pages/estore.php');
}
$retrying = isset($_GET['retrying']) ? true : false;
include __DIR__ . '/../common/document_head.html';
?>

<body class="body w3-auto">
    <header class="w3-black">
        <?php
        include __DIR__ . '/../common/banner.php';
        include __DIR__ . '/../common/menus.html';
        ?>
    </header>
    <?php
    $loginNamedSaved = isset($_SESSION['POST_SAVE']["loginName"])
        ? $_SESSION['POST_SAVE']["loginName"]  : "";
    $passwordSave =   isset($_SESSION['POST_SAVE']["loginPassword"])
        ? $_SESSION['POST_SAVE']["loginPassword"]  : "";
    ?>
    <main class="w3-container w3-border-black w3-light-grey w3-border-top w3-border-bottom">
        <div class="w3-container">
            <article class="w3-full">
                <h2 class="w3-center">
                    Login Form
                </h2>
                <h4 class="w3-center w3-text-black" style="background-color: DodgerBlue;">
                    <strong>Important Note </strong>
                </h4>
                <p>
                    Purchasing items from our on-line e-store requires logging in.
                    If you have not yet registered with Future Vision,
                    before attempting to log in you must
                    <a href="/pages/formRegistration.php" rel="external" hreflang="en" type="text/html"> register
                        here</a>.
                </p>
                <form id="loginForm" action="/scripts/formLoginProcess.php" method="post" autocomplete="on">
                    <div class="w3-row w3-section">
                        <div class="w3-quarter w3-container">
                            Login Name:
                        </div>
                        <div class="w3-threequarter w3-container w3-wide">
                            <input type="text" name="loginName" required style="width: 90%;" placeholder="Must be the login name assigned at registration" value="<?php echo $loginNamedSaved; ?>">
                        </div>
                    </div>
                    <div class="w3-row">
                        <div class="w3-quarter w3-container">
                            Password:
                        </div>
                        <div class="w3-threequarter w3-container w3-wide">
                            <input type="password" name="loginPassword" required style="width: 90%;" placeholder="Must be the password chosen at registration" value="<?php echo $passwordSave; ?>">
                        </div>
                    </div>

                    <div class="w3-row w3-section">
                        <div class="w3-quarter w3-container">
                            &nbsp;
                        </div>
                        <div class="w3-threequarter w3-container">
                            <input type="submit" value="Log in" id="submit" name="submit">
                            <input type="reset" value="Reset Form">
                        </div>
                    </div>
                    <div class="w3-row">
                    </div>
                    <?php if ($retrying) { ?>

                        <p class="w3-center w3-red w3-text-black">
                            Sorry, but your login procedure failed.
                            <br>An invalid username or password was entered.
                            <br>Please try again to enter correct login information.
                        </p>
                    <?php } ?>
                </form>
            </article>
        </div>
    </main>

    <?php
    include __DIR__ . '/../common/footer.html';
    ?>
