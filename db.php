<?php
$servername = "localhost"; // Change to your server's hostname
$username = "root";        // Replace with your MySQL username
$password = "";            // Replace with your MySQL password
$dbname = "travel_website"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
