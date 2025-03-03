\<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            margin: 50px;
        }
        .profile-container {
            background: white;
            padding: 30px;
            width: 400px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        }
        h2 {
            color: #ff4500;
        }
        .profile-info {
            font-size: 18px;
            margin: 10px 0;
        }
        button {
            padding: 10px 15px;
            border: none;
            background: #ff4500;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            border-radius: 5px;
        }
        button:hover {
            background: #e63900;
        }
    </style>
</head>
<body>

<div class="profile-container">
    <h2>Welcome, <?php echo isset($_SESSION['fullName']) ? $_SESSION['fullName'] : "Guest"; ?>!</h2>

    <?php if (isset($_SESSION['user_id'])): ?>
        <p class="profile-info"><strong>Username:</strong> <?php echo $_SESSION['username']; ?></p>
        <p class="profile-info"><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>
        <a href="logout.php"><button>Logout</button></a>
    <?php else: ?>
        <p>You are not logged in.</p>
        <a href="LOGIN FORM CODE.php"><button>Login</button></a>
    <?php endif; ?>
</div>

</body>
</html>
