<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'db_connect.php'; // Ensure database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Prevent duplicate feedback
    $check_stmt = $conn->prepare("SELECT * FROM feedback WHERE email = ? AND message = ?");
    $check_stmt->bind_param("ss", $email, $message);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        echo "<script>alert('❌ You have already submitted this feedback!'); window.history.back();</script>";
        exit();
    }

    $check_stmt->close();

    // Insert feedback into the database
    $stmt = $conn->prepare("INSERT INTO feedback (fullName, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $fullName, $email, $message);

    if ($stmt->execute()) {
        echo "<script>alert('✅ Feedback submitted successfully!'); window.location.href='feedback.php';</script>";
    } else {
        echo "<script>alert('❌ Error submitting feedback. Please try again.'); window.history.back();</script>";
    }

    $stmt->close();
}
?>
