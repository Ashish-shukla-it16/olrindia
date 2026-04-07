<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../login.php');
    exit;
}
require_once '../includes/db.php';
include '../includes/header.php';

$sql = "SELECT p.id, p.name, p.price, u.name as seller_name FROM products p JOIN users u ON p.user_id = u.id";
$result = $conn->query($sql);
?>

<h1>Manage Products</h1>

<table>
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Seller</th>
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
                echo '<td>' . $row["seller_name"] . '</td>';
                echo '<td>';
                echo '<a href="edit_product.php?id=' . $row["id"] . '">Edit</a> | ';
                echo '<a href="delete_product.php?id=' . $row["id"] . '">Delete</a>';
                echo '</td>';
                echo '</tr>';
            }
        } else {
            echo "<tr><td colspan='4'>No products found</td></tr>";
        }
        ?>
    </tbody>
</table>

<?php include '../includes/footer.php'; ?>