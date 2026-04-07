<?php include '../includes/header.php'; ?>

<h1>Delete Product</h1>

<p>Are you sure you want to delete this product?</p>

<form action="delete_product_handler.php" method="POST">
    <input type="hidden" name="product_id" value="<?php echo $_GET['id']; ?>">
    <button type="submit">Yes, Delete</button>
    <a href="products.php">No, Cancel</a>
</form>

<?php include '../includes/footer.php'; ?>