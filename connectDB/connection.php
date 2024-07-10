<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_22101152630330";
$connect = mysqli_connect($host, $user, $pass, $db);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
