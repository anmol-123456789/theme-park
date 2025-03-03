<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $rideType = htmlspecialchars($_POST['rideType']);
    $rideTime = htmlspecialchars($_POST['rideTime']);
    $rideDate = htmlspecialchars($_POST['rideDate']);

    $stmt = $conn->prepare("INSERT INTO ride_schedule (fullName, email, rideType, rideTime, rideDate) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $fullName, $email, $rideType, $rideTime, $rideDate);

    if ($stmt->execute()) {
        echo "<script>alert('Ride scheduled successfully!'); window.location.href='Ride Scheduling and Management.php';</script>";
    } else {
        echo "<script>alert('Error scheduling ride.'); window.history.back();</script>";
    }

    $stmt->close();
}
?>
