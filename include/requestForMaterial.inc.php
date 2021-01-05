<?php

if (isset($_POST["submit"])) {
    # code...

    $itemname = $_POST["item_name"];
    $personname = $_POST["person_name"];

    require_once 'dbh.inc.php';
    require_once 'donationRequestFunction.inc.php';

    if (emptyDonationInput($itemname, $personname) !== false) {
        header("location: ../requestForMaterial.php?error=emptyinput");
        exit();
    }

    if (requestDonationExist($conn, $itemname, $personname) == false) {
        header("location: ../requestForMaterial.php?error=noreqordon");
        exit();
    }

    donateOrRequest($conn, $itemname, $personname);
}