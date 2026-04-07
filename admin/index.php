<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../login.php');
    exit;
}
include '../includes/header.php';
?>

<h1>Admin Panel</h1>

<p>Welcome to the admin panel, <?php echo $_SESSION['name']; ?>. Here you can manage users, products, and settings.</p>

<ul>
    <li><a href="users.php">Manage Users</a></li>
    <li><a href="products.php">Manage Products</a></li>
</ul>

<?php include '../includes/footer.php'; ?>