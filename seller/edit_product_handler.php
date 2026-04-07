<?php
session_start();
require_once '../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $user_id = $_SESSION['id'];

    // Prepare and bind
    $stmt = $conn->prepare("UPDATE products SET name = ?, description = ?, price = ? WHERE id = ? AND user_id = ?");
    $stmt->bind_param("ssdis", $name, $description, $price, $product_id, $user_id);

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
