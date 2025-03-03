<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
            color: black;
            background: linear-gradient(rgba(47, 126, 163, 0.8), rgba(0, 0, 0, 0.5)),
                        url('https://img.freepik.com/premium-photo/retro-pop-summer-carnival_839035-1851481.jpg?w=360') 
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

        /* Main Container */
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 40px;
        }

        /* Sign-Up Form */
        .signup-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 25px;
            border-radius: 12px;
            width: 350px;
            max-width: 90%;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            z-index: 3;
            transition: transform 0.3s ease-in-out;
        }

        .signup-container:hover {
            transform: scale(1.05);
        }

        /* Input Fields */
        input {
            width: 90%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #88cfb4;
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
        @media (max-width: 800px) {
            .container {
                flex-direction: column;
                gap: 20px;
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

    <!-- Main Container -->
    <div class="container">
        <!-- Sign-Up Form -->
        <div class="signup-container">
            <h3>The New Theme Park</h3>
            <p>SIGN-UP FORM</p>
            <form action="signup.php" method="post">
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName" required><br />

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br />

                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br />

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br />

                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required><br /><br />

                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>

    <!-- Go Back Home Button -->
    <a href="index.php" class="home-button">
        🎢 Home
    </a>

</body>
</html>
