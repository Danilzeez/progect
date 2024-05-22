<?php
require_once 'connect.php';
session_start();

// Get user input
$name = $_POST['name'];
$email = $_POST['email'];

// Prepare the SQL query to prevent SQL injection
$stmt = $connect->prepare("SELECT * FROM `users` WHERE `name` = $name AND `email` = $email");
$stmt->bind_param("ss", $name, $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch user data
    $user = $result->fetch_assoc();

    // Store user data in session
    $_SESSION['user'] = [
        "id" => $user['id'],
        "name" => $user['name'],
        "email" => $user['email']
    ];

    // Redirect to profile page
    header('Location: ../profile.php');
    echo "Вы авторизовались как: <br>";
    echo $user['name'];
} else {
    // If no user found, set error message and redirect to index page
    $_SESSION['message'] = "Неверный Email или номер";
    header('Location: ../index.php');
}

// Close statement and connection
$stmt->close();
$connect->close();
?>

<pre>
<?php
// Debugging code (print statements)
print_r($result);
print_r($user);
?>
</pre>



