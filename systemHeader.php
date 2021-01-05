<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materaial Management System</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="wrapper">
            <h2 id="project-name">Material Management System</h2>
            <nav>
                <ul>
                    <?php
                    if (isset($_SESSION["useruid"])) {
                        echo "<li class=\"nav-option\"><a href='index.php' style=\"color:lightgreen;\">Profile:" . $_SESSION["useruid"] . "</a></li>";
                        echo "<li class=\"nav-option\"><a href='fillUpForm.php'>Fill Up Form</a></li>";
                        echo "<li class=\"nav-option\"><a href='requestForMaterial.php'>Requests For Materials</a></li>";
                        echo "<li class=\"nav-option\"><a href='availablityForMaterial.php'>Availablity For Material</a></li>";
                        echo "<li class=\"nav-option\"><a href='./include/logout.inc.php' style=\"color:yellow;\">Logout</a></li>";
                    }
                    else {
                        echo "<li class=\"nav-option\"><a href=\"index.php\">Home</a></li>";
                        echo "<li class=\"nav-option\"><a href='signup.php'>Sign up</a></li>";
                        echo "<li class=\"nav-option\"><a href='login.php'>Login</a></li>";
                    }
                    ?>
                    
                </ul>
            </nav>
        </div>
    </header>