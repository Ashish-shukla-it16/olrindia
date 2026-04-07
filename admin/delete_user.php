<?php include '../includes/header.php'; ?>

<h1>Delete User</h1>

<p>Are you sure you want to delete this user?</p>

<form action="delete_user_handler.php" method="POST">
    <input type="hidden" name="user_id" value="<?php echo $_GET['id']; ?>">
    <button type="submit">Yes, Delete</button>
    <a href="users.php">No, Cancel</a>
</form>

<?php include '../includes/footer.php'; ?>