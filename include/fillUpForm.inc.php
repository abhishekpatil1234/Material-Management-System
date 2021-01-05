<!-- we still didnt include invalid input function -->
<?php

if (isset($_POST["submit"])) {
    
    
    $itemname = $_POST["item_name"];
    $labname = $_POST["lab_name"];
    $subtype = $_POST["sub_type"];
    $by = $_POST["requested_by_or_available_to"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    if (emptyInput($itemname, $labname, $subtype, $by) !== false) {
        header("location: ../fillUpForm.php?error=emptyinput");
        exit();
    }

    enterData($conn, $itemname, $labname, $subtype, $by);

}

else {
    header("location ../login.php");
    exit();
}