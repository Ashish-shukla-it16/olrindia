<?php include '../includes/header.php'; ?>

<h1>Manage Users</h1>

<table>
    <thead>
        <tr>
            <th>User Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <!-- User rows will be dynamically generated here -->
        <tr>
            <td>John Doe</td>
            <td>john.doe@example.com</td>
            <td>
                <a href="edit_user.php?id=1">Edit</a> |
                <a href="delete_user.php?id=1">Delete</a>
            </td>
        </tr>
    </tbody>
</table>

<?php include '../includes/footer.php'; ?>