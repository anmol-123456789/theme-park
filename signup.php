<?php
include 'db_connect.php'; // Make sure db_connect.php is included

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $username = htmlspecialchars($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if email already exists
    $check_stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        echo "<script>alert('❌ Email already exists! Please use a different email.'); window.history.back();</script>";
        exit(); // Stop execution
    }

    $check_stmt->close();

    // Insert new user into the database
    $stmt = $conn->prepare("INSERT INTO users (fullname, email, username, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fullName, $email, $username, $password);

    if ($stmt->execute()) {
        echo "<script>alert('✅ Signup successful! Please log in.'); window.location.href='LOGIN FORM CODE.php';</script>";
    } else {
        echo "<script>alert('❌ Error signing up. Please try again later.'); window.history.back();</script>";
    }

    $stmt->close();
}
?>
