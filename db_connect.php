<?php
$servername = "//use your own";
$username = "use your own"; // Change this for live hosting
$password = "use your own"; // Change this for live hosting
$dbname = "use ";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
