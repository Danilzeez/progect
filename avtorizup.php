<?php
session_start();
$connect = mysqli_connect('localhost','root', '', 'bd');


$email = $_POST['email'];
$password = $_POST['password'];

$checkuser = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password' ");

if (mysqli_num_rows($checkuser) > 0) {

    $user = mysqli_fetch_assoc($checkuser);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "full_name" => $user['full_name'],
        
        "email" => $user['email']
    ];

    echo "Вы авторизовались как: <br>";

    echo $user['full_name'];



} else {
    echo "Неверный логин или пароль";
}

?>





