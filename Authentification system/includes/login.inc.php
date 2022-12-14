<?php
session_start();
require 'connecting.php';

if (isset($_POST['$username']) && !empty($_POST['$username']) && isset($_POST['$password']) && !empty($_POST['$password'])) {

    $username = strtolower($_POST['$username']);
    $password = $_POST['$password'];

    $sql = "SELECT * FROM users WHERE username='$username' ";
    $result = mysqli_query($conectare, $sql);
    $row = $result->fetch_assoc();
    $hash = $row['password'];

    $check = password_verify($password, $hash);

    if ($check == 0) {

        header("Location: ../index.php?info=gresit");
        die();
    } else {
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$hash'";
        $result = mysqli_query($conectare, $sql);

        if (!$row = $result->fetch_assoc()) {
            echo "The password or username doesn't match!";
        } else {
            $_SESSION['id'] = $row['id'];
            $_SESSION['firstName'] = $row['firstName'];
            $_SESSION['lastName'] = $row['lastName'];
            $_SESSION['username'] = $row['username'];
        }

        header("Location: ../index.php");
    }
}
