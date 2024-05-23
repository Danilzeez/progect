
 <!-- 
 require_once 'connect.php';
 session_start();

  Get user input
$name = $_POST['name'];
 $email = $_POST['email'];
$confirm_email = $_POST['confirm_email']; // Assuming there is a field for confirming email
 $number = $_POST['number'];

   Check if email and confirm email match
 if ($email === $confirm_email) {
      Prepare the SQL query to prevent SQL injection
    $stmt = $connect->prepare("INSERT INTO `users` (`id`, `name`, `email`, `number`) VALUES (NULL, $name, $email, $number)");
     $stmt->bind_param("sss", $name, $email, $number);

      Execute the statement and check for success
     if ($stmt->execute()) {
         $_SESSION['message'] = "Регистрация прошла успешно!";
         header('Location: ../register.php');
         exit();
     } else {
         $_SESSION['message'] = "Ошибка регистрации: " . $stmt->error;
         header('Location: ../register.php');
         exit();
     }

      Close statement and connection
     $stmt->close();
     $connect->close();
 } else {
     $_SESSION['message'] = "Email не совпадают";
     header('Location: ../register.php');
     exit();
 } -->
 
<?php
     $connect =  mysqli_connect('localhost', 'root', '', 'users');
        session_start();
        require_once 'connect.php';


        $name = $_POST['name'];
        $email = $_POST ['email'];
        $number = $_POST['number'];

         { 

            mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `email`, `number`) VALUES (NULL, '$name', '$email', '$number')");

            $_SESSION['message'] = 'Регистрация прошла успешно!';
            header('Location: ../register.php');
        } 
        // else {
        //     $_SESSION['message'] = 'Email не совпадают';
        //     header('Location: ..//register.php');
        // }
 ?>
 




<!-- // require_once 'connect.php'; // Подключаем файл соединения с базой данных
// session_start();

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Получаем данные из формы
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $confirm_email = $_POST['confirm_email'];
//     $number = $_POST['number'];

//     // Проверяем, совпадают ли email и подтверждение email
//     if ($email === $confirm_email) {
//         // Готовим SQL-запрос для предотвращения SQL-инъекций
//         $stmt = $connect->prepare("INSERT INTO `users` (`id`, `name`, `email`, `number`) VALUES (NULL, ?, ?, ?)");
//         $stmt->bind_param("sss", $name, $email, $number);
//         echo "SQL: $sql<br>";

//         // Выполняем запрос и проверяем успех
//         if ($stmt->execute()) {
//             $_SESSION['message'] = "Регистрация прошла успешно!";
//             header('Location: register_success.php'); // Перенаправляем на страницу успешной регистрации
//             exit();
//         } else {
//             $_SESSION['message'] = "Ошибка регистрации: " . $stmt->error;
//             header('Location: register.php'); // Перенаправляем обратно на страницу регистрации
//             exit();
//         }

//         // Закрываем запрос и соединение
//         $stmt->close();
//         $connect->close();
//     } else {
//         $_SESSION['message'] = "Email не совпадают";
//         header('Location: register.php'); // Перенаправляем обратно на страницу регистрации
//         exit();
//     }
// }
?> -->






















