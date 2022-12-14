<?php
require 'connecting.php';
if (
    !empty($_POST['firstName']) &&
    !empty($_POST['lastName']) &&
    !empty($_POST['username']) &&
    !empty($_POST['password']) &&
    isset($_POST['firstName']) &&
    isset($_POST['lastName']) &&
    isset($_POST['username']) &&
    isset($_POST['password'])
) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = strtolower($_POST['username']);
    $password = $_POST['password'];

    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT username FROM users WHERE username='$username'";
    $result = mysqli_query($connecting, $sql);
    $check = mysqli_num_rows($result);

    if ($check > 0) {
        header("Location: ../signup.php?info=exista");
        die();
    } else {
        $sql = "INSERT INTO `users`(`first name`, `last name`, `username`, `password`) VALUES ('$firstName', '$lastName', '$username', '$password_hashed')";
        $result = mysqli_query($connecting, $sql);

        header("Location: ../signup.php?info=ok");
    }
} else {
    header("Location: ../signup.php?info=eroare");
}
