<?php
session_start();
require_once 'connect.php';


$name = $_POST['name'];
$email = $_POST['email'];

$checkuser = mysqli_query($connect, "SELECT * FROM `users` WHERE `name` = '$name' AND `email` = '$email' ");

if (mysqli_num_rows($checkuser) > 0) {

    $user = mysqli_fetch_assoc($checkuser);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "name" => $user['name'],
        
        "email" => $user['email']
    ];

    header('Location: ../profile.php');


    // echo "Вы авторизовались как: <br>";

    // echo $user['name'];

                                                                                                    

} else {
    $_SESSION['message'] = "Неверный Email или Номер";
    header('Location: ../index.php');
}

?>

<pre>
    <?php
    print_r($checkuser);
    print($user);
    ?>
</pre>





