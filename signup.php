<?php
    include "loginHeader.php";
?>
    <section>
        <form action="./include/signup.inc.php" method="post">
            <h1>Signup</h1>
                <input type="text" name="name" id="name" placeholder="full name">
                <input type="email" name="email" id="emailid" placeholder="email">
                <input type="text" name="userName" id="uname" placeholder="username">
                <input type="password" name="password" id="pass" placeholder="password">
                <input type="password" name="passwordRepeat" id="passRepeat" placeholder="repeat password">
                <button type="submit" name="submit" class="btnSubmit">signup</button>
        </form>
        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p style=\"color:red; text-align:center;\">fill in all fields</p>";
                }
                else if ($_GET["error"] == "invaliduid") {
                    echo "<p style=\"color:red; text-align:center;\">choose a proper username</p>";
                }
                else if ($_GET["error"] == "invalidemail") {
                    echo "<p style=\"color:red; text-align:center;\">choose a proper email</p>";
                }
                else if ($_GET["error"] == "pwddonotmatch") {
                    echo "<p style=\"color:red; text-align:center;\">password doesn't match</p>";
                }
                else if ($_GET["error"] == "stmtfailed") {
                    echo "<p style=\"color:red; text-align:center;\">Something went wrong</p>";
                }
                else if ($_GET["error"] == "uidexist") {
                    echo "<p style=\"color:red; text-align:center;\">username already taken</p>";
                }
                else if ($_GET["error"] == "none") {
                    echo "<p style=\"color:blue; text-align:center;\">you have signed up</p>";
                }
            }
        ?>
    </section>


<?php
    include "systemFooter.php";
?>