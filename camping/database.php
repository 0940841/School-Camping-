<?php
$host       = "localhost";
$database   = "reserveringen";
$user       = "root";
$password   = "root";
$db = mysqli_connect($host, $user, $password, $database)
    or die("Error: " . mysqli_connect_error());;
?>
