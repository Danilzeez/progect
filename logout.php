<?php
 $connect =  mysqli_connect('localhost', 'root', '', 'gg');
session_start();
unset($_SESSION['users']);
header('Location: ../index.php');