<?php
// Database credentials
$servername = "localhost";
$username = "u661019052_marketplace_user"; // Replace with your database username
$password = "YourStrongPassword"; // Replace with your database password
$dbname = "u661019052_marketplace";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
