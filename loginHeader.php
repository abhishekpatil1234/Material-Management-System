<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materaial Management System</title>
    <link rel="stylesheet" href="css/loginStyle.css">
</head>
<body>
    <header>
        <div class="wrapper">
            <h2 id="project-name">Material Management System</h2>
            <nav>
                <ul>
                    <li class="nav-option"><a href="index.php">Home</a></li>
                    <?php
                        echo "<li class=\"nav-option\"><a href='signup.php'>Sign up</a></li>";
                        echo "<li class=\"nav-option\"><a href='login.php'>Login</a></li>";
                    ?>
                    
                </ul>
            </nav>
        </div>
    </header>