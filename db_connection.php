<?php
$conn = mysqli_connect('localhost', 'root', 'admin', 'crud_db');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}