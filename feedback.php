<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <style>
        /* Full-page Background */
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            text-align: center;
            color: white;
            background: linear-gradient(rgba(69, 128, 35, 0.6), rgba(0, 0, 0, 0.8)), 
                        url('https://img.freepik.com/premium-photo/theme-park-night-colorful-lights_79295-4080.jpg') 
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

        /* Feedback Form */
        .feedback-container {
            position: relative;
            background: rgba(255, 255, 255, 0.15);
            padding: 30px;
            border-radius: 15px;
            width: 400px;
            max-width: 90%;
            z-index: 3;
            box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease-in-out;
        }

        /* Hover Effect */
        .feedback-container:hover {
            transform: scale(1.05);
        }

        /* Input Fields */
        input, textarea {
            width: 90%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            background: rgba(255, 255, 255, 0.2);
            color: white;
        }

        input::placeholder, textarea::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        textarea {
            resize: none;
            height: 80px;
        }

        /* Submit Button */
        button {
            width: 100%;
            padding: 12px;
            background: #ff4500;
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }

        button:hover {
            background: #e63900;
            transform: scale(1.1);
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
        @media (max-width: 600px) {
            .feedback-container {
                width: 90%;
                padding: 20px;
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

    <!-- Feedback Form -->
    <div class="feedback-container">
        <h3>The New Theme Park</h3>
        <p>🎡 FEEDBACK FORM 🎢</p>
        <form action="submit_feedback.php" method="post">
            <label for="fullName">Name:</label>
            <input type="text" id="fullName" name="fullName" placeholder="Enter your name" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required><br>

            <label for="message">Feedback:</label>
            <textarea id="message" name="message" placeholder="Write your feedback here..." required></textarea><br>

            <button type="submit">✅ Submit Feedback</button>
        </form>
    </div>

    <!-- Go Back Home Button -->
    <a href="index.php" class="home-button">
        🎢 Home
    </a>

</body>
</html>
