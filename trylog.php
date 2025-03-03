<?php
include 'db_connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username exists
    $stmt = $conn->prepare("SELECT id, fullName, email, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $fullName, $email, $hashedPassword);
        $stmt->fetch();

        if (password_verify($password, $hashedPassword)) {
            // Store session variables
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            $_SESSION['fullName'] = $fullName;
            $_SESSION['email'] = $email;

            echo "<script>alert('✅ Login successful!'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('❌ Incorrect password! Please try again.'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('❌ Username not found! Please sign up first.'); window.history.back();</script>";
    }

    $stmt->close();
}
?>
