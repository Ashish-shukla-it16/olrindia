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

$stmt = $conn->prepare("SELECT name FROM products WHERE id = ? AND user_id = ?");
$stmt->bind_param("ii", $product_id, $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo "Product not found or you don't have permission to delete it.";
    exit;
}
?>

<h1>Delete Product</h1>

<p>Are you sure you want to delete this product?</p>

<form action="delete_product_handler.php" method="POST">
    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
    <button type="submit">Yes, Delete</button>
    <a href="products.php">No, Cancel</a>
</form>

<?php include '../includes/footer.php'; ?>