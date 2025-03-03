<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $date = htmlspecialchars($_POST['date']);
    $ticketType = htmlspecialchars($_POST['ticketType']);
    $paymentMode = htmlspecialchars($_POST['paymentMode']);

    $stmt = $conn->prepare("INSERT INTO ticket_bookings (fullName, email, visit_date, ticketType, paymentMode) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $fullName, $email, $date, $ticketType, $paymentMode);

    if ($stmt->execute()) {
        echo "<script>alert('Tickets booked successfully!'); window.location.href='Ticket Booking and Payment.php';</script>";
    } else {
        echo "<script>alert('Error booking tickets.'); window.history.back();</script>";
    }

    $stmt->close();
}
?>
