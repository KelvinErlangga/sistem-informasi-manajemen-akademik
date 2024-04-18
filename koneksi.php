<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = '1462200082';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    echo 'Error: ' . mysqli_connect_error();
}
