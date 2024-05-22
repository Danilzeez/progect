<?php 
session_start();
$connect =  mysqli_connect('Localhost', 'root', '', 'gg');
if ($_SESSION['user']){
    header('Locatoin profile.php');

}

?>
<!DOCTYPE html>3
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form action="signin.php">
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

