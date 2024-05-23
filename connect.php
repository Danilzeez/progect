<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users"; // Название вашей базы данных

// Создаем соединение
$connect = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
?>






<!--
// $connect = mysqli_connect('localhost','root','','gg');

// if (!$connect){
//         die ('Error connect  to DataBase');
// } -->