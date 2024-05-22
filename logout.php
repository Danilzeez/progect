<?php
 $connect =  mysqli_connect('reg', 'root', '', 'gg');
session_start();
unset($_SESSION['user']);
header('Location: ../index.php');