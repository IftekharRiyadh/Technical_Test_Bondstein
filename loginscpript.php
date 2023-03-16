<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login_id = $_POST['login_id'];
    $password = md5($_POST['password']);
    $conn = new mysqli('localhost', 'username', 'password', 'technical_test');
    $query = "SELECT * FROM users WHERE login_id='$login_id' AND password='$password'";
    $result = $conn->query($query);
    if ($result->num_rows == 1) {
        $_SESSION['login_id'] = $login_id;
        header('Location: login.php.php');
    } else {
        $error = "Invalid login ID or password";
    }
}
if ($_SESSION['UserCategory'] !== 'Admin') {
    header('Location: index.php');
    exit();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $login_id = $_POST['login_id'];
    $password = md5($_POST['password']);
    $user_category = $_POST['user_category'];
    $conn = new mysqli('localhost', 'username', 'password', 'technical_test');
    $query = "INSERT INTO users (username, login_id, password, UserCategory) VALUES ('$username', '$login_id', '$password', '$user_category')";
    $result = $conn->query($query);
    if ($result) {
        $success = "New user added successfully";
    } else {
        $error = "Error adding new user: " . $conn->error;
    }
}
?>
