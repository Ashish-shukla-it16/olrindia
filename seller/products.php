<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'seller') {
    header('Location: ../login.php');
    exit;
}
require_once '../includes/db.php';
include '../includes/header.php';

$user_id = $_SESSION['id'];
$sql = "SELECT id, name, price FROM products WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<h1>Manage Your Products</h1>

<p>Here you can add, edit, and delete your products.</p>

<a href="add_product.php">Add New Product</a>

<table>
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["name"] . '</td>';
                echo '<td>$' . $row["price"] . '</td>';
                echo '<td>';
                echo '<a href="edit_product.php?id=' . $row["id"] . '">Edit</a> | ';
                echo '<a href="delete_product.php?id=' . $row["id"] . '">Delete</a>';
                echo '</td>';
                echo '</tr>';
            }
        } else {
            echo "<tr><td colspan='3'>No products found</td></tr>";
        }
        ?>
    </tbody>
</table>

<?php include '../includes/footer.php'; ?>