<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Theme Park Map</title>
    <style>
        /* General Page Styling */
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            font-family: 'Arial', sans-serif;
            color: white;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)), 
                        url('https://img.freepik.com/premium-photo/popular-attractions-amusement-parks_1186366-160789.jpg') 
                        no-repeat center center fixed;
            background-size: cover;
            overflow: hidden;
            position: relative;
        }

        /* Roller Coaster Animation */
        .coaster-container {
            position: absolute;
            top: 5%;
            left: 50%;
            width: 250px;
            height: 100px;
            transform: translateX(-50%);
            background: url('https://upload.wikimedia.org/wikipedia/commons/5/55/Roller_coaster_icon.svg') 
                        no-repeat center center;
            background-size: contain;
            animation: coasterMove 3s infinite ease-in-out;
            z-index: 2;
        }

        /* Coaster Movement */
        @keyframes coasterMove {
            0% { transform: translateX(-50%) translateY(0px); }
            50% { transform: translateX(-50%) translateY(-10px); }
            100% { transform: translateX(-50%) translateY(0px); }
        }

        /* Main Container */
        .map-container, .content {
            background: rgba(255, 255, 255, 0.9); 
            padding: 25px;
            border-radius: 12px;
            width: 550px;
            max-width: 90%;
            margin: 50px auto;
            box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.3);
            color: black;
            text-align: center;
            display: none;
            animation: fadeIn 0.5s ease-in-out;
        }

        /* Theme Park Map */
        .theme-park-map {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        /* Navbar */
        .navbar {
            text-align: center;
            margin-bottom: 15px;
        }

        .nav-link, .back-link {
            text-decoration: none;
            padding: 10px 18px;
            background: #ff4500;
            color: white;
            border-radius: 5px;
            transition: 0.3s ease-in-out;
            display: inline-block;
            font-size: 1rem;
            font-weight: bold;
        }

        .nav-link:hover, .back-link:hover {
            background: #e63900;
        }

        /* Attraction Links */
        .attractions {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            margin-top: 15px;
        }

        .attraction {
            padding: 12px 18px;
            background: #007bff;
            color: white;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s ease-in-out;
        }

        .attraction:hover {
            background: #0056b3;
            transform: scale(1.05);
        }

        /* Fade-in Effect */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0px); }
        }

        /* Roller Coaster Home Button */
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
            z-index: 3;
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
</head>
<body>

    <!-- Roller Coaster Animation -->
    <div class="coaster-container"></div>

    <!-- Navbar -->
    <div class="navbar">
        <a href="#" class="nav-link" onclick="showSection('map')">🏠 Theme Park Map</a>
    </div>

    <!-- Theme Park Map Section -->
    <div id="map" class="map-container" style="display: block;">
        <h2>Welcome to The New Theme Park!</h2>
        <p>Select an attraction to explore:</p>
        <img src="https://t4.ftcdn.net/jpg/09/79/36/63/360_F_979366322_hdoe81Nss5Bb0vJgC9CzTxUoOYzfM6bX.jpg" 
             alt="Theme Park Map" class="theme-park-map">
        <div class="attractions">
            <a href="#" class="attraction" onclick="showSection('ferris-wheel')">🎡 Ferris Wheel</a>
            <a href="#" class="attraction" onclick="showSection('water-slide')">🌊 Water Slide</a>
            <a href="#" class="attraction" onclick="showSection('roller-coaster')">🎢 Roller Coaster</a>
            <a href="#" class="attraction" onclick="showSection('haunted-house')">👻 Haunted House</a>
            <a href="#" class="attraction" onclick="showSection('food-court')">🍔 Food Court</a>
        </div>
    </div>

    <!-- Attraction Sections -->
    <div id="ferris-wheel" class="content">
        <h2>🎡 Enjoy a Relaxing Ride on the Ferris Wheel</h2>
        <p>Take in breathtaking views of the park as you soar high above the ground.</p>
        <a href="#" class="back-link" onclick="showSection('map')">🔙 Back to Map</a>
    </div>

    <div id="water-slide" class="content">
        <h2>🌊 Splash into Adventure on Our Water Slide!</h2>
        <p>Enjoy high-speed drops and refreshing splashes on our *giant water slide*!</p>
        <a href="#" class="back-link" onclick="showSection('map')">🔙 Back to Map</a>
    </div>

    <div id="roller-coaster" class="content">
        <h2>🎢 Experience the Thrill of Our Roller Coaster</h2>
        <p>Buckle up for a high-speed ride with twists, turns, and loops!</p>
        <a href="#" class="back-link" onclick="showSection('map')">🔙 Back to Map</a>
    </div>

    <!-- Go Back Home Button -->
    <a href="index.php" class="home-button">
        🎢 Home
    </a>

    <script>
        function showSection(sectionId) {
            document.querySelectorAll('.map-container, .content').forEach(section => section.style.display = 'none');
            document.getElementById(sectionId).style.display = 'block';
        }
    </script>

</body>
</html>
