<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" types="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>Document</title>
</head>

<body>

    <div class="header">
        <div class="container">
            <div class="logo">
                <img src="imagini/grav-logo.png">
            </div>
            <div class="nav">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <?php
                    if (!isset($_SESSION['id'])) {
                        echo '<li><a href="signup.php">SIGN UP</a></li>';
                    }
                    ?>

                </ul>
            </div>
        </div>
    </div>

    <?php
    // echo 'Salut!';
    if (!isset($_SESSION['id'])) {
        echo '
        <div class="login">
        <div class="container">
            <h1>Welcome!</h1>
            <form method="POST" action="includes/login.inc.php">
                <input type="text" name="username" placeholder="Username"><br>
                <input type="password" name="password" placeholder="Password"><br>
                <input type="submit" value="Log In">
            </form>
        </div>
    </div> ';
    } else {
        echo '<p style="text-align: center; font-family: Lato;  font-size: 35px; padding-top: 100px;">My first name is ' .
            $_SESSION['firstName'] . '</p>';
        echo '
         <form action="includes/logout.inc.php>
         <input type="submit" value="Log out">
         </form>
         ';
    }
    ?>


</body>

</html>