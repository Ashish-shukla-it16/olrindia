<?php include '../includes/header.php'; ?>

<h1>Manage Your Products</h1>

<p>Here you can add, edit, and delete your products.</p>

<!-- A button to add a new product -->
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
        <!-- Product rows will be dynamically generated here -->
        <tr>
            <td>Sample Product</td>
            <td>$123.45</td>
            <td>
                <a href="edit_product.php?id=1">Edit</a> |
                <a href="delete_product.php?id=1">Delete</a>
            </td>
        </tr>
    </tbody>
</table>

<?php include '../includes/footer.php'; ?>