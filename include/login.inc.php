<?php

if (isset($_POST["submit"])) {
    
    
    $name = $_POST["username"];
    $pwd = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($name, $pwd) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $name, $pwd);
}

else {
    header("location ../login.php");
    exit();
}