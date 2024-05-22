<?php
 $connect =  mysqli_connect('reg', 'root', '', 'users');
session_start();
unset($_SESSION['user']);
header('Location: ../index.php');