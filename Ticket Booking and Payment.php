<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Booking</title>
    <style>
        /* Full-page Layout */
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            color: white;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)), 
                        url('https://i.etsystatic.com/9489965/r/il/9c4ee6/3742631464/il_570xN.3742631464_8agm.jpg') 
                        no-repeat center center fixed;
            background-size: cover;
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

        /* Booking Form */
        .booking-container {
            background: rgba(255, 255, 255, 0.2); /* Slightly visible white */
            padding: 25px;
            border-radius: 12px;
            width: 350px;
            max-width: 90%;
            box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.3);
            text-align: center;
            z-index: 3;
            transition: transform 0.3s ease-in-out;
        }

        .booking-container:hover {
            transform: scale(1.05);
        }

        /* Input Fields */
        input, select {
            width: 90%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid white;
            border-radius: 6px;
            font-size: 16px;
            background: rgba(255, 255, 255, 0.3); /* Now visible */
            color: black;
        }

        input::placeholder {
            color: rgba(0, 0, 0, 0.7);
        }

        select {
            background: rgba(255, 255, 255, 0.9); /* Visible Dropdown */
            color: black;
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
            .booking-container {
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

    <!-- Booking Form -->
    <div class="booking-container">
        <h3>The New Theme Park</h3>
        <p>🎟️ BOOK YOUR TICKETS 🎢</p>
        <form action="booktickets.php" method="post">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" placeholder="Enter your name" required><br />

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required><br />

            <label for="date">Date of Visit:</label>
            <input type="date" id="date" name="date" required><br />

            <label for="ticketType">Ticket Type:</label>
            <select id="ticketType" name="ticketType">
                <option value="adult">🎟️ Adult</option>
                <option value="child">👦 Child</option>
                <option value="senior">🧓 Senior</option>
            </select><br />

            <label for="paymentMode">Payment Mode:</label>
            <select id="paymentMode" name="paymentMode">
                <option value="creditCard">💳 Credit Card</option>
                <option value="debitCard">🏦 Debit Card</option>
                <option value="paypal">🅿️ PayPal</option>
            </select><br /><br />

            <button type="submit">✅ Book Now</button>
        </form>
    </div>

    <!-- Go Back Home Button -->
    <a href="index.php" class="home-button">
        🎢 Home
    </a>

</body>
</html>
