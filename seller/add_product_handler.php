<?php
session_start();
require_once '../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $user_id = $_SESSION['id']; // Get user_id from session

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO products (user_id, name, description, price) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isds", $user_id, $name, $description, $price);

    if ($stmt->execute()) {
        // Redirect to products page
        header("Location: products.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
