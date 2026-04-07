<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'seller') {
    header('Location: ../login.php');
    exit;
}
require_once '../includes/db.php';
include '../includes/header.php';

$product_id = $_GET['id'];
$user_id = $_SESSION['id'];

$stmt = $conn->prepare("SELECT name, description, price FROM products WHERE id = ? AND user_id = ?");
$stmt->bind_param("ii", $product_id, $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
} else {
    echo "Product not found or you don't have permission to edit it.";
    exit;
}
?>

<h1>Edit Product</h1>

<form action="edit_product_handler.php" method="POST">
    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
    <label for="name">Product Name:</label>
    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($product['name']); ?>" required>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" step="0.01" value="<?php echo htmlspecialchars($product['price']); ?>" required>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required><?php echo htmlspecialchars($product['description']); ?></textarea>

    <button type="submit">Update Product</button>
</form>

<?php include '../includes/footer.php'; ?>