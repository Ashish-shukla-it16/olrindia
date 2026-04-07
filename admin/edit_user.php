<?php include '../includes/header.php'; ?>

<h1>Edit User</h1>

<form action="edit_user_handler.php" method="POST">
    <input type="hidden" name="user_id" value="<?php echo $_GET['id']; ?>">
    <label for="name">User Name:</label>
    <input type="text" id="name" name="name" value="John Doe" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="john.doe@example.com" required>

    <button type="submit">Update User</button>
</form>

<?php include '../includes/footer.php'; ?>