<?php
 $connect =  mysqli_connect('reg', 'root', '', 'users');
        session_start();
        require_once 'connect.php';


        $name = $_POST['name'];
        $email = $_POST ['email'];
        $number = $_POST['number'];

         if ($email === $email) {

            mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `email`, `number`) VALUES (NULL, 'name', 'email', 'number')");

            $_SESSION['message'] = 'Регистрация прошла успешно!';
            header('Location: ../register.php');


        }
        else {
            $_SESSION['message'] = 'Email не совпадают';
            header('Location: ..//register.php');
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
