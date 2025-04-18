<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!function_exists('checkLoggedIn')) {
    function checkLoggedIn() {
        if (!isset($_SESSION['id'])) {
            header("Location: login.php");
            exit();
        }
    }
}