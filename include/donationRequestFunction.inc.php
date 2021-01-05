

<?php

function emptyDonationInput( $itemname, $personname) {
    $result;
    if (empty($itemname) || empty($personname)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function donateOrRequest($conn, $itemname, $personname){
    $sql = "INSERT INTO task_completed (item_id, item_name, lab_name, requested_or_extra, requested_by_or_available_to) SELECT * FROM inventory WHERE item_name= ? AND requested_by_or_available_to= ?;";
    $sql2 = "DELETE FROM inventory WHERE item_name=? AND requested_by_or_available_to=?;";
    $stmt = mysqli_stmt_init($conn);
    $stmt2 = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../requestForMaterial.php?error=stmtfailed");
        exit();
    }
    if (!mysqli_stmt_prepare($stmt2, $sql2)) {
        header("location: ../requestForMaterial.php?error=2ndstmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $itemname, $personname);
    mysqli_stmt_bind_param($stmt2, "ss", $itemname, $personname);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_execute($stmt2);
    mysqli_stmt_close($stmt);
    mysqli_stmt_close($stmt2);
    header("location: ../index.php?error=none");
    exit();
}

function requestDonationExist($conn, $itemname, $personname){
    $sql = "SELECT * FROM inventory WHERE item_name = ? OR requested_by_or_available_to = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../requestForMaterial.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $itemname, $personname);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}