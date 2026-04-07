<?php
require_once 'includes/db.php';
include 'includes/header.php';

$sql = "SELECT p.id, p.name, p.description, p.price, u.name as seller_name FROM products p JOIN users u ON p.user_id = u.id";
$result = $conn->query($sql);
?>

<h1>Products</h1>

<div class="product-listings">
    <?php
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<div class="product">';
            echo '<img src="https://via.placeholder.com/150" alt="' . $row["name"] . '">';
            echo '<h2>' . $row["name"] . '</h2>';
            echo '<p>' . $row["description"] . '</p>';
            echo '<p>Price: $' . $row["price"] . '</p>';
            echo '<p>Seller: ' . $row["seller_name"] . '</p>';
            echo '<a href="product_detail.php?id=' . $row["id"] . '">View Details</a>';
            echo '</div>';
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</div>

<?php include 'includes/footer.php'; ?>