<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<form action="signup.php">
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