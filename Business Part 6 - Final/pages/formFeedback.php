<!--formFeedback.php-->
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
        <div class="w3-container">
            <article class="w3-full">
                <h3>
                    Feedback Form...Tell Us What You Think, or Ask Us a Question
                </h3>
                <h5 class="w3-center w3-text-red">Each * denotes a required field.</h5>
                <form id="contactForm" action="scripts/formFeedbackProcess.php" method="post">
                    <div class="w3-row">
                        <div class="w3-third w3-container">
                            <label for="salutation">Salutation:<span class="w3-text-red">*</span></label>
                        </div>
                        <div class="w3-twothird w3-container">
                            <select name="salutation" id="salutation" required>
                                <p>
                                    <option value="" selected disabled hidden>
                                        Choose One
                                    </option>
                                    <option value="Mrs.">Mrs.</option>
                                    <option value="Ms.">Ms.</option>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Dr.">Dr.</option>
                            </select>
                            </p>
                        </div>

                    </div>
                    <div class="w3-row">
                        <div class="w3-third w3-container">
                            <p>First Name:<span class="w3-text-red">*</span></p>
                        </div>
                        <div class="w3-twothird w3-container">
                            <p>
                                <input type="text" name="firstName" required title="Initial capital, spaces, hyphens&#013;and apostrophes allowed." style="width: 100%;" pattern="^[A-Z ][A-Za-z '-]*$">
                            </p>
                        </div>
                        <div class="w3-row">
                            <div class="w3-third w3-container">
                                <p>Last Name:<span class="w3-text-red">*</span></p>
                            </div>
                            <div class="w3-twothird w3-container">
                                <p>
                                    <input type="text" name="lastName" required title="Initial capital,spaces, hyphens&#013;and apostrophes allowed." style="width: 100%;" pattern="^[A-Z][A-Za-z '-]*$">
                                </p>
                            </div>
                            <div class="w3-row">
                                <div class="w3-third w3-container">
                                    <p>E-mail Address:<span class="w3-text-red">*</span></p>
                                </div>
                                <div class="w3-twothird w3-container">
                                    <p>
                                        <input type="text" name="email" required title="x@y.z x and y alphnumeric, . or -, z 2 or 3 letters" style="width: 100%;" pattern="^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})$">
                                    </p>
                                </div>
                                <div class="w3-row">
                                    <div class="w3-third w3-container">
                                        <p>Phone Number:</p>
                                    </div>
                                    <div class="w3-twothird w3-container">
                                        <p>
                                            <input type="text" name="phone" title="xxx-yyy-zzzz, area code xxx- optional" style="width: 100%;" pattern="^(\d{3}-)?\d{3}-\d{4}$">
                                        </p>
                                    </div>
                                    <div class="w3-row">
                                        <div class="w3-third w3-container">
                                            <p>Subject:<span class="w3-text-red">*</span></p>
                                        </div>
                                        <div class="w3-twothird w3-container">
                                            <p>
                                                <input type="text" name="subject" required style="width: 100%;">
                                            </p>
                                        </div>
                                        <div class="w3-row">
                                            <div class="w3-third w3-container">
                                                <p>Comments:<span class="w3-text-red">*</span></p>
                                            </div>
                                            <div class="w3-twothird w3-container">
                                                <p>
                                                    <textarea name="message" rows="6" required style="width: 100%;"></textarea>
                                                </p>
                                            </div>
                                            <div class="w3-row">
                                                <div class="w3-third w3-container">
                                                    <p>&nbsp;</p>
                                                </div>
                                                <div class="w3-twothird w3-container w3-left-align">
                                                    <p>
                                                        Please check if you would like us to get
                                                        back to you:<input type="checkbox" name="reply">
                                                    </p>
                                                </div>
                                                <div class="w3-twothird w3-container w3-right-align">
                                                    <p>
                                                        <input type="submit" value="Send Feedback">
                                                        <input type="reset" value="Reset Form">
                                                    </p>
                                                </div>
                                            </div>
                </form>
            </article>
        </div>
    </main>

    <?php
    include '/home/course/u31/public_html/submissions/test/common/footer.html';
    ?>