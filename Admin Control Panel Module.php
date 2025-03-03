

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Control Panel</title>
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
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)), 
                        url('https://img.freepik.com/premium-photo/tips-planning-theme-park-visit_1186366-157196.jpg') 
                        no-repeat center center fixed;
            background-size: cover;
        }

        /* Admin Panel Container */
        .admin-container {
            background: rgba(56, 121, 149, 0.415); /* Semi-transparent background */
            padding: 25px;
            border-radius: 12px;
            width: 350px;
            max-width: 90%;
            box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.3);
            text-align: center;
        }

        /* Input Fields */
        input {
            width: 90%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #0f9d9b;
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
            color: rgba(255, 255, 255, 0.566);
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }

        button:hover {
            background: #e63900;
        }

        /* Responsive Design */
        @media (max-width: 700px) {
            .admin-container {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <!-- Admin Control Panel Form -->
    <div class="admin-container">
        <h3>Admin Control Panel</h3>
        <p>LOGIN</p>
        <form action="adminlogin.php" method="post">
            <label for="adminUsername">Username:</label>
            <input type="text" id="adminUsername" name="adminUsername" required><br />

            <label for="adminPassword">Password:</label>
            <input type="password" id="adminPassword" name="adminPassword" required><br /><br />

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>


