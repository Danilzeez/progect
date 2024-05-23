
<!-- session_start();
if ($_SESSION['user']){
    header('Locatoin: profile.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Регистрация</title>

</head>
<body>
<form action="signup.php" method="post">
            <div class="form-group">
                <input type="text" id="name" name="name" placeholder="Ваше Имя">
                <input type="email" id="email" name="email" placeholder="Ваша электронная почта">
                <input type="tel" id="number" name="number" placeholder="Ваш номер телефона">
            </div>
            <button type="submit">Заказать</button>
            
                if ($_SESSION['message']){
                        echo '<p class=msg>' . $_SESSION['message'] = '$name,$number'. ' </p>';
                }
                unset($_SESSION['message']);
                
                ?>


        </form>
</body>
</html> -->




<!-- // Get user input
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];

// Prepare the SQL query to prevent SQL injection
$stmt = $connect->prepare("INSERT INTO `users` (`id`, `name`, `email`, `number`) VALUES (NULL, $name, $email, $number)");
$stmt->bind_param("sss", $name, $email, $number);


if 
    ($_SESSION['message'] = "Ошибка регистрации: " . $stmt->error;
    header('Location: ../register.php');
}
    unset($_SESSION['message']);

// Close statement and connection
$stmt->close();
$connect->close();
?> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['message'])) {
        echo "<p>" . $_SESSION['message'] . "</p>";
        unset($_SESSION['message']);
    }
    ?>
    <form method="POST" action="signup.php">
        <input type="text" name="name" placeholder=" Ваше Имя" required>
        <input type="email" name="email" placeholder=" Ваша электронная почта" required>
        <input type="email" name="confirm_email" placeholder="Подтвердите почту" required>
        <input type="tel" name="number" placeholder="Ваш номер телефона" required>
        <button type="submit">Заказать</button>
    </form>
</body>
</html>
