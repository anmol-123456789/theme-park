<?php session_start(); ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme Park Home</title>
    <style>
        /* General Page Styling */
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            font-family: Arial, sans-serif;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)), 
                        url('https://c8.alamy.com/compfr/r5k5d2/details-carrousel-dans-amusement-park-r5k5d2.jpg') 
                        no-repeat center center fixed;
            background-size: cover;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        /* Sidebar Styling */
        .sidebar {
            position: fixed;
            left: -250px;
            top: 0;
            width: 250px;
            height: 100%;
            background: rgba(0, 0, 0, 0.85);
            box-shadow: 3px 0 10px rgba(0, 0, 0, 0.3);
            padding-top: 60px;
            transition: 0.4s ease-in-out;
        }

        .sidebar a {
            display: block;
            padding: 12px 20px;
            text-decoration: none;
            color: white;
            font-size: 1.1rem;
            transition: 0.3s ease-in-out;
        }

        .sidebar a:hover {
            background: #ff4500;
            padding-left: 25px;
        }

        /* Sidebar Open */
        .sidebar.active {
            left: 0;
        }

        /* Hamburger Menu */
        .menu-btn {
            position: fixed;
            top: 15px;
            left: 15px;
            font-size: 30px;
            cursor: pointer;
            background: none;
            border: none;
            color: white;
            z-index: 1000;
        }

        /* Content Area */
        .home-container {
            background: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 12px;
            width: 80%;
            max-width: 700px;
            box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.3);
            text-align: center;
            color: black;
            animation: fadeIn 1s ease-in-out;
        }

        /* Fade-in Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Design */
        @media (max-width: 700px) {
            .home-container {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <!-- Hamburger Menu -->
    <button class="menu-btn" onclick="toggleSidebar()">☰</button>

    <!-- Sidebar Navigation -->
    <div class="sidebar" id="sidebar">
        <p style="color:white; text-align:center;">
            Welcome, <strong>
                <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : "Guest"; ?>
            </strong>!
        </p>
        <a href="index.php">🏠 Home</a>
        <a href="profile.php">👤 Profile</a>
        <a href="Ride Scheduling and Management.php">🎡 Ride Scheduling</a>
        <a href="Ticket Booking and Payment.php">🎟️ Ticket Booking</a>
        <a href="Interactive Theme Park Map.php">🗺️ Theme Map</a>
        <a href="feedback.php">✍️ Feedback</a>

        <?php if (!isset($_SESSION['user_id'])): ?>
            <a href="Sign up page.php">📝 Sign Up</a>
            <a href="LOGIN FORM CODE.php">🔑 Login</a>
        <?php else: ?>
            <a href="logout.php">🚪 Logout</a>
        <?php endif; ?>
    </div>

    <!-- Home Content -->
    <div class="home-container">
        <h1>Welcome to The New Theme Park! 🎡🎢</h1>
        <p>Experience thrilling rides, exciting events, and delicious food all in one magical place!</p>
    </div>

    <script>
        function toggleSidebar() {
            document.getElementById("sidebar").classList.toggle("active");
        }
    </script>

</body>
</html>
