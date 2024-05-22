<?php
require_once 'connect.php';
session_start();

// Get user input
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];

// Prepare the SQL query to prevent SQL injection
$stmt = $connect->prepare("INSERT INTO `users` (`id`, `name`, `email`, `number`) VALUES (NULL, $name, $email, $number)");
$stmt->bind_param("sss", $name, $email, $number);

if ($stmt->execute()) {
    $_SESSION['message'] = "Регистрация прошла успешно!";
    header('Location: ../register.php');
} else {
    $_SESSION['message'] = "Ошибка регистрации: " . $stmt->error;
    header('Location: ../register.php');
}

// Close statement and connection
$stmt->close();
$connect->close();
?>
