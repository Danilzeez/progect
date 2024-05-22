<?php

        session_start();
        require_once 'connect.php';


        $full_name = $_POST['full_name'];
        $email = $_POST ['email'];
        $password = $_POST['password'];
        $confirm_password= $_POST['confirmpassword'];

        if ($password == $password_confirm){
            
            $password =md5($password);

            maysqli_query($connect, "INSERT INTO `reg` (`id`, `full_name`, `email`, `password`) VALUES (NULL, '$full_name', '$email', '$password')");

            $_SESSION['message'] = 'Регистрация прошла успешно!';
            header('Location: ../register.php');


        }
?>


























// $connect = mysqli_connect('localhost', 'root', '', 'bd') or die('Error');

// $full_name = $_POST['full_name'];
// $login = $_POST['login'];
// $email = $_POST['email'];
// $password = $_POST['password'];
// $password_confirm = $_POST['password_confirm'];

// echo $password;

// if($password === $password_confirm){

// mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`) VALUES (NULL, '$full_name', '$login', '$email', '$password')");

// } else { 
//     echo 'Пароли не совпадают';
//     }
// ?>
