<?php
session_start();
if (isset($_SESSION['id'])) {
    header("Location: index.php");
}

?>

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
                    <li><a href="signup.php">SIGN UP</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="login">
        <div class="container">
            <h1>Sign Up</h1>
            <form method="POST" action="includes/signup.inc.php">

                <input type="text" name="firstName" placeholder="First name"><br>
                <input type="text" name="lastName" placeholder="Last name"><br>
                <input type="text" name="username" placeholder="Username"><br>
                <input type="password" name="password" placeholder="Password"><br>
                <input type="submit" value="Sign Up">
            </form>
            <?php
            if (isset($_GET['info']) && $_GET['info'] == 'ok') {
                echo ' <p style="text-align: center ; color: green; font-size: 20px;">The account has been created!</p>';
            } else if (isset($_GET['info']) && $_GET['info'] == 'eroare') {
                echo ' <p style="text-align: center ; color: red; font-size: 20px;">Oups! An error occured!</p>';
            } else if (isset($_GET['info']) && $_GET['info'] == 'exista') {
                echo ' <p style="text-align: center ; color: red; font-size: 20px;">The username already exists!</p>';
            }
            ?>
        </div>
    </div>

</body>

</html>