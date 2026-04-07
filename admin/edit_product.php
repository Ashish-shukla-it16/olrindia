<?php include '../includes/header.php'; ?>

<h1>Edit Product</h1>

<form action="edit_product_handler.php" method="POST">
    <input type="hidden" name="product_id" value="<?php echo $_GET['id']; ?>">
    <label for="name">Product Name:</label>
    <input type="text" id="name" name="name" value="Sample Product" required>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" step="0.01" value="123.45" required>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required>Sample product description.</textarea>

    <button type="submit">Update Product</button>
</form>

<?php include '../includes/footer.php'; ?>