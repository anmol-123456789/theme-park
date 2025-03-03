<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'db_connect.php'; // Make sure this file exists

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
} else {
    echo "✅ Database connected successfully!";
}
?>

