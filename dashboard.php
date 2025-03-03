<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* General Page Styling */
        <!-- Go Back to Home Button -->
<a href="index.php" class="home-button">
    🎢 Home
</a>

<style>
    .home-button {
        position: fixed;
        bottom: 20px;
        left: 20px;
        background: #ff4500;
        color: white;
        padding: 12px 20px;
        font-size: 1.1rem;
        text-decoration: none;
        border-radius: 50px;
        display: flex;
        align-items: center;
        box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease-in-out;
        font-weight: bold;
    }

    .home-button:hover {
        background: #e63900;
        transform: scale(1.1);
    }

    .home-button::before {
        content: "🎢";
        font-size: 1.5rem;
        margin-right: 8px;
    }
</style>

        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            font-family: Arial, sans-serif;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)), 
                        url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5bVCCInclMoKb8Ms_S2morUjt8lkxoTiHmg&s') 
                        no-repeat center center fixed;
            background-size: cover;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        /* Container Styling */
        .dashboard-container, .content {
            background: rgba(255, 255, 255, 0.9);
            padding: 25px;
            border-radius: 12px;
            width: 80%;
            max-width: 800px;
            box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.3);
            color: black;
            text-align: center;
            display: none; /* Initially hide all sections */
        }

        /* Dashboard Default View */
        .dashboard-container {
            display: block;
        }

        /* Navbar */
        .navbar {
            text-align: center;
            margin-bottom: 20px;
        }

        .nav-link {
            text-decoration: none;
            padding: 10px 20px;
            background: #ff4500;
            color: white;
            border-radius: 5px;
            margin: 5px;
            transition: 0.3s ease-in-out;
            display: inline-block;
        }

        .nav-link:hover {
            background: #e63900;
        }

        /* Back Links */
        .back-link {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 15px;
            background: #ff4500;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }

        .back-link:hover {
            background: #e63900;
        }

        /* Dashboard Cards */
        .dashboard-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            background: #007bff;
            color: white;
            padding: 20px;
            border-radius: 10px;
            width: 250px;
            text-align: center;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            transition: 0.3s ease-in-out;
        }

        .card:hover {
            background: #0056b3;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <!-- Dashboard Default View -->
    <div id="dashboard" class="dashboard-container">
        <h1>Welcome to the Theme Park Dashboard</h1>
        <div class="navbar">
            <a href="#" class="nav-link" onclick="showSection('manage-bookings')">🎟 Manage Bookings</a>
            <a href="#" class="nav-link" onclick="showSection('ride-schedule')">🎢 Ride Schedule</a>
            <a href="#" class="nav-link" onclick="showSection('food-court')">🍔 Food Court</a>
            <a href="#" class="nav-link" onclick="showSection('events')">📅 Events</a>
        </div>

        <h2>Your Features</h2>
        <div class="dashboard-cards">
            <div class="card" onclick="showSection('manage-bookings')">
                <h3>🎟 Manage Bookings</h3>
                <p>View and update your ticket bookings.</p>
            </div>
            <div class="card" onclick="showSection('ride-schedule')">
                <h3>🎢 Ride Schedule</h3>
                <p>Check your scheduled rides and timings.</p>
            </div>
            <div class="card" onclick="showSection('food-court')">
                <h3>🍔 Food Court</h3>
                <p>Browse and pre-order meals for your visit.</p>
            </div>
            <div class="card" onclick="showSection('events')">
                <h3>📅 Events</h3>
                <p>See upcoming events and special offers.</p>
            </div>
        </div>
    </div>

    <!-- Manage Bookings Section -->
    <div id="manage-bookings" class="content">
        <h2>🎟 Manage Your Bookings</h2>
        <p>View and update all your ticket bookings for the theme park.</p>
        <p>🗓 Change your visit date or cancel tickets if needed.</p>
        <a href="#" class="back-link" onclick="showSection('dashboard')">🔙 Back to Dashboard</a>
    </div>

    <!-- Ride Schedule Section -->
    <div id="ride-schedule" class="content">
        <h2>🎢 Your Ride Schedule</h2>
        <p>Check all the rides you have scheduled for the day.</p>
        <p>⏰ Ensure you're on time for each ride to avoid missing any fun!</p>
        <a href="#" class="back-link" onclick="showSection('dashboard')">🔙 Back to Dashboard</a>
    </div>

    <!-- Food Court Section -->
    <div id="food-court" class="content">
        <h2>🍔 Explore Our Food Court</h2>
        <p>Discover a variety of cuisines and snacks available at the park.</p>
        <p>🍟 Pre-order meals and enjoy a quick dining experience!</p>
        <a href="#" class="back-link" onclick="showSection('dashboard')">🔙 Back to Dashboard</a>
    </div>

    <!-- Events Section -->
    <div id="events" class="content">
        <h2>📅 Upcoming Events</h2>
        <p>Check out the exciting events and special shows happening at the park.</p>
        <p>🎉 Don’t miss out on the fun and festivities!</p>
        <a href="#" class="back-link" onclick="showSection('dashboard')">🔙 Back to Dashboard</a>
    </div>

    <script>
        // Function to show the selected section and hide others
        function showSection(sectionId) {
            const sections = document.querySelectorAll('.dashboard-container, .content');
            sections.forEach(section => section.style.display = 'none');
            document.getElementById(sectionId).style.display = 'block';
        }
    </script>
</body>
</html>


