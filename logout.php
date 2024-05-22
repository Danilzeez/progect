<?php
 $connect =  mysqli_connect('reg', 'root', '', 'gg');
session_start();
unset($_SESSION['users']);
header('Location: ../index.php');