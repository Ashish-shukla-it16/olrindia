<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'seller') {
    header('Location: ../login.php');
    exit;
}
include '../includes/header.php';
?>

<h1>Seller Dashboard</h1>

<p>Welcome to your dashboard, <?php echo $_SESSION['name']; ?>. Here you can manage your products and view your sales.</p>

<ul>
    <li><a href="products.php">Manage Products</a></li>
</ul>

<?php include '../includes/footer.php'; ?>