<?php
    session_start();
    if ($_SESSION['user']){
        header('Location: profile.php');
    }
    ?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Регистрация</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
<form class="form-signup" action="vendor/signup.php" method="post" name="form"><!--в action - ссылку на php-->
          <label for="fullname">ФИО</label>
          <input class="form-styling" type="text" name="fullname" placeholder=""/>
          <label for="email">Email</label>
          <input class="form-styling" type="text" name="email" placeholder=""/>
          <label for="password">Пароль</label>
          <input class="form-styling" type="text" name="password" placeholder=""/>
          <label for="confirmpassword">Подтвердите пароль</label>
          <input class="form-styling" type="text" name="confirmpassword" placeholder=""/>
           <button type="submit"> <!--<a ng-click="checked = !checked" class="btn-signup">-->Зарегистрироваться <!--</a> --></button>  
				       
                        <div class="forgot">
        <a href="#">Забыли пароль?</a>
      </div>

      <?php 
            if ($_SESSION['message']){
                echo '<p сlass="msg"> ' , $_SESSION{'message'} . '</p>';
            }
            unset($_SESSION{'message'});
            ?>
            </form>
                        </body>
</html>
