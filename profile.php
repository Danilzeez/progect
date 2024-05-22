<?php
session_start();

$connect =  mysqli_connect('Localhost', 'root', '', 'gg');
if (!$_SESSION['users']);{
    header('Location: /');
}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
      <link rel="stylesheet" href="css/style.css">
</head>
<body>


<!-- Профиль -->


    <form>  
        <img src="<?= $_SESSION['users'] ?>" alt="">
         <h2 style="margin: 10px 0;"><?=$_SESSION['users']['name'] ?></h2>
         <a href='#'> <?= $_SESSION['users']['email']?></a>
        <a href="index.php" class=logout> Выход </a>
    </form>
</body>
</html>
