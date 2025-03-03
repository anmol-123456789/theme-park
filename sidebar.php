<?php
session_start();
?>

<div class="sidebar">
    <h2>🎢 Theme Park</h2>
    
    <!-- Display Welcome Message -->
    <p>Welcome, <strong>
        <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : "Guest"; ?>
    </strong>!</p>

    <ul>
        <li><a href="index.php">🏠 Home</a></li>
        <li><a href="profile.php">👤 Profile</a></li>
        <li><a href="Ride Scheduling and Management.php">🎡 Ride Scheduling</a></li>
        <li><a href="Ticket Booking and Payment.php">🎟️ Ticket Booking</a></li>
        <li><a href="Interactive Theme Park Map.php">🗺️ Park Map</a></li>
        <li><a href="feedback.php">✍️ Feedback</a></li>

        <!-- Show Logout only if user is logged in -->
        <?php if (isset($_SESSION['user_id'])): ?>
            <li><a href="logout.php">🚪 Logout</a></li>
        <?php else: ?>
            <li><a href="LOGIN FORM CODE.php">🔑 Login</a></li>
        <?php endif; ?>
    </ul>
</div>

<style>
    /* Sidebar Styling */
    .sidebar {
        position: fixed;
        left: 0;
        top: 0;
        width: 220px;
        height: 100%;
        background: #ff4500;
        padding: 20px;
        color: white;
        font-family: Arial, sans-serif;
        text-align: center;
    }

    .sidebar h2 {
        margin-bottom: 20px;
    }

    .sidebar p {
        font-size: 16px;
        margin-bottom: 20px;
    }

    .sidebar ul {
        list-style-type: none;
        padding: 0;
    }

    .sidebar ul li {
        margin: 15px 0;
    }

    .sidebar ul li a {
        color: white;
        text-decoration: none;
        font-size: 16px;
        display: block;
        padding: 10px;
        border-radius: 5px;
        transition: 0.3s;
    }

    .sidebar ul li a:hover {
        background: rgba(255, 255, 255, 0.2);
    }
</style>
