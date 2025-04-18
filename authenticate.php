<?php
include('auth.php');
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['id'] = $user['id'];
        header("Location: dashboard.php");
        exit();
    }

    $_SESSION['error'] = 'Invalid credentials';
    header("Location: login.php");
    exit();

}
