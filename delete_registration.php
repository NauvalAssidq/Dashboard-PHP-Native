<?php
include('auth.php');
include('db_connection.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    
    $stmt = $conn->prepare("DELETE FROM registrar WHERE id = ?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        $_SESSION['message'] = "Registration deleted successfully";
    } else {
        $_SESSION['error'] = "Error deleting registration";
    }
    
    $stmt->close();
    header("Location: dashboard.php");
    exit();
}
?>