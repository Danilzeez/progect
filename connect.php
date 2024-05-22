<?php
$servername = "gg";
$username = "root";
$password = "";
$dbname = "Localhost";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
?>
