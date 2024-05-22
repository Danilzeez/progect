<?php 
session_start();
$connect =  mysqli_connect('reg', 'root', '', 'users');
if ($_SESSION['user']){
    header('Locatoin profile.php');

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="avtorizup.php">
            <div class="form-group">
                <input type="text" id="name" name="name" placeholder="Ваше Имя">
                <input type="email" id="email" name="email" placeholder="Ваша электронная почта">
                <input type="tel" id="number" name="number" placeholder="Ваш номер телефона">
            </div>
            <button type="submit">Заказать</button>
            <?php
                if ($_SESSION['message']){
                        echo '<p class=msg>' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
                
                ?>


        </form>
</body>
</html>

