<?php
$connecting = mysqli_connect('localhost', 'root', '', 'login');

if (!$connecting) {
    die('The connection to the database failed!');
}
