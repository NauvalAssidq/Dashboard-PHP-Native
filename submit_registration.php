<?php
session_start();
include('auth.php');
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['old'] = $_POST;

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $check = mysqli_query($conn, "SELECT * FROM registrar WHERE email='$email' OR phone='$phone'");
    
    if (mysqli_num_rows($check) > 0) {
        $message = 'Email or phone already registered';
        header("Location: register.php?status=error&message=" . urlencode($message));
        exit();
    }

    $insert = mysqli_query($conn, "INSERT INTO registrar (name, email, phone, address) 
                VALUES ('$name', '$email', '$phone', '$address')");
    
    if ($insert) {
        unset($_SESSION['old']);
        header("Location: register.php?status=success&message=" . urlencode('Registration successful!'));
        exit();
    } else {
        $message = 'Registration failed. Please try again.';
        header("Location: register.php?status=error&message=" . urlencode($message));
        exit();
    }
}