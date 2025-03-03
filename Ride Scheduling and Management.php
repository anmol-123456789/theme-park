<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Scheduling</title>
    <style>
        /* Full-page Layout */
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif;
            color: burlywood;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)), 
                        url('https://learncalifornia.org/wp-content/uploads/2023/12/california-theme-parks-1-1024x585.jpg') 
                        no-repeat center center fixed;
            background-size: contain;
            overflow: hidden;
            position: relative;
        }

        /* Roller Coaster Animation */
        .coaster-container {
            position: absolute;
            top: 10%;
            left: 50%;
            width: 300px;
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

        /* Scheduling Form (Old Box Color) */
        .scheduling-container {
            background: rgba(255, 255, 255, 0); /* Transparent White */
            padding: 25px;
            border-radius: 12px;
            width: 400px;
            max-width: 90%;
            box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.3);
            text-align: center;
            z-index: 3;
            transition: transform 0.3s ease-in-out;
        }

        .scheduling-container:hover {
            transform: scale(1.05);
        }

        /* Input Fields */
        input, select {
            width: 90%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        /* Submit Button */
        button {
            width: 100%;
            padding: 12px;
            background: #ff4500;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }

        button:hover {
            background: #e63900;
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

        /* Responsive Design */
        @media (max-width: 700px) {
            .scheduling-container {
                width: 90%;
            }

            .coaster-container {
                width: 200px;
                height: 80px;
            }
        }
    </style>
</head>
<body>

    <!-- Roller Coaster Animation -->
    <div class="coaster-container"></div>

    <!-- Ride Scheduling Form -->
    <div class="scheduling-container">
        <h3>The New Theme Park</h3>
        <p>🎡 RIDE SCHEDULING & MANAGEMENT 🎢</p>
        <form action="scheduleRide.php" method="post">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required><br />

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br />

            <label for="rideType">Select Ride:</label>
            <select id="rideType" name="rideType">
                <option value="rollerCoaster">🎢 Roller Coaster</option>
                <option value="ferrisWheel">🎡 Ferris Wheel</option>
                <option value="bumperCars">🚗 Bumper Cars</option>
                <option value="waterRide">💦 Water Ride</option>
            </select><br />

            <label for="rideTime">Preferred Ride Time:</label>
            <input type="time" id="rideTime" name="rideTime" required><br />

            <label for="rideDate">Date of Visit:</label>
            <input type="date" id="rideDate" name="rideDate" required><br /><br />

            <button type="submit">🎟️ Schedule Ride</button>
        </form>
    </div>

    <!-- Go Back Home Button -->
    <a href="index.php" class="home-button">
        🎢 Home
    </a>

</body>
</html>
