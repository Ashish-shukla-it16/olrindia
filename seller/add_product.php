<?php include '../includes/header.php'; ?>

<h1>Add New Product</h1>

<form action="add_product_handler.php" method="POST">
    <label for="name">Product Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" step="0.01" required>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea>

    <button type="submit">Add Product</button>
</form>

<?php include '../includes/footer.php'; ?>