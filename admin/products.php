<?php include '../includes/header.php'; ?>

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
        <!-- Product rows will be dynamically generated here -->
        <tr>
            <td>Sample Product</td>
            <td>$123.45</td>
            <td>Jane Doe</td>
            <td>
                <a href="edit_product.php?id=1">Edit</a> |
                <a href="delete_product.php?id=1">Delete</a>
            </td>
        </tr>
    </tbody>
</table>

<?php include '../includes/footer.php'; ?>