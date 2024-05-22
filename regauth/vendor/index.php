<?php
session_start();

if ($_SESSION['user']){
    header('Location:profile.php');

}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Авторизация</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
<form class="form-signin" action="vendor/signin.php" method="post" name="form">
          <label for="username">ФИО</label>
          <input class="form-styling" type="text" name="username" placeholder=""/>
          <label for="password">Пароль</label>
          <input class="form-styling" type="text" name="password" placeholder=""/>
          <input type="checkbox" id="checkbox"/>
          <label for="checkbox" ><span class="ui"></span>Запомнить меня</label>
          <div class="btn-animate">
            <button type="submit"><a class="btn-signin">Войти</a></button>
          </div>

          <?php
          if ($_SESSION['message']){
            echo '<p class="msg:> ' , $_SESSION['message'] . '</p>';
          }
          unset($_SESSION['message']);

          ?>
          </form>
          </body>
</html>
