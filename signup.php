<?php
        $connect =  mysqli_connect('Localhost', 'root', '', 'users');
        session_start();
        require_once 'connect.php';


        $name = $_POST['name'];
        $email = $_POST ['email'];
        $number = $_POST['number'];

         if ($email === $email) {

            mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `email`, `number`) VALUES (NULL, '$name', '$email', '$number')");

            $_SESSION['message'] = 'Регистрация прошла успешно!';
            header('Location: ../register.php');


        }
        else {
            $_SESSION['message'] = 'Email не совпадают';
            header('Location: ..//register.php');
        }
?>


























