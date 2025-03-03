<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Theme Park</title>
    <style>
        /* General Styling */
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
            text-align: center;
            color: white;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8)), 
                        url('https://images.pexels.com/photos/1450355/pexels-photo-1450355.jpeg') 
                        no-repeat center center fixed;
            background-size: cover;
            position: relative;
        }

        /* Roller Coaster Animation */
        .coaster-container {
            position: absolute;
            top: 5%;
            left: 50%;
            width: 350px;
            height: 100px;
            transform: translateX(-50%);
            background: url('https://upload.wikimedia.org/wikipedia/commons/5/55/Roller_coaster_icon.svg') 
                        no-repeat center center;
            background-size: contain;
            animation: coasterMove 3s infinite ease-in-out;
            z-index: 2;
        }

        /* Coaster Movement Animation */
        @keyframes coasterMove {
            0% { transform: translateX(-50%) translateY(0px); }
            50% { transform: translateX(-50%) translateY(-10px); }
            100% { transform: translateX(-50%) translateY(0px); }
        }

        /* Login Form */
        .login-container {
            position: relative;
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 12px;
            width: 350px;
            max-width: 90%;
            z-index: 3;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.4);
            transition: transform 0.3s ease-in-out;
            color: black;
        }

        .login-container:hover {
            transform: scale(1.05);
        }

        /* Input Fields */
        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #007bff;
            border-radius: 8px;
            font-size: 16px;
            text-align: center;
            background: white;
            color: black;
        }

        /* Submit Button */
        button {
            width: 100%;
            padding: 12px;
            background: #007bff;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s ease-in-out;
            font-weight: bold;
        }

        button:hover {
            background: #0056b3;
        }

        /* Home Button */
        .home-button {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background: #007bff;
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
            background: #0056b3;
            transform: scale(1.1);
        }

        .home-button::before {
            content: "🌊";
            font-size: 1.5rem;
            margin-right: 8px;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .login-container {
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

    <!-- Login Form -->
    <div class="login-container">
        <h2>🌊 Welcome to The Water Park! 🎢</h2>
        <p>Login to access the fun!</p>
        <form action="trylog.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br />

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br /><br />

            <button type="submit">Login</button>
        </form>
    </div>

    <!-- Go Back Home Button -->
    <a href="index.php" class="home-button">
        🌊 Home
    </a>

</body>
</html>
