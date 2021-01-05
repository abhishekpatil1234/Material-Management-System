<?php
    include "loginHeader.php";
?>
    <section>
        <form action="./include/login.inc.php" method="post">
            <h1 id="login">Login</h1>
            <input type="text" name="username" id="uname" placeholder="username">   
            <input type="password" name="password" id="pass" placeholder="password">
            <button type="submit" name="submit" class="btnSubmit">login</button>
        </form>
        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p style=\"color:red; text-align:center;\">fill in all fields</p>";
                }
                else if ($_GET["error"] == "wronglogin") {
                    echo "<p style=\"color:red; text-align:center;\">incorrect login</p>";
                }
            }
        ?>
    </section>
<?php
    include "systemFooter.php";
?>