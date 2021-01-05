<?php



$DBserverName = "localhost";
$DBusername = "root";
$DBpass = "";
$DBname = "material_management_system";

$conn = mysqli_connect($DBserverName, $DBusername, $DBpass, $DBname);

if (!$conn) {
    die('connection fail' . mysqli_connect_error()) ;
}
else {
    echo 'database connected';
}