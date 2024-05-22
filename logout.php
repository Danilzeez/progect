<?php
 $connect =  mysqli_connect('Localhost', 'root', '', 'gg');
session_start();
unset($_SESSION['users']);
header('Location: ../index.php');