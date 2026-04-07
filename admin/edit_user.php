<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../login.php');
    exit;
}
require_once '../includes/db.php';
include '../includes/header.php';

$user_id = $_GET['id'];

$stmt = $conn->prepare("SELECT name, email, role FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "User not found.";
    exit;
}
?>

<h1>Edit User</h1>

<form action="edit_user_handler.php" method="POST">
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
    <label for="name">User Name:</label>
    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>

    <label for="role">Role:</label>
    <select id="role" name="role">
        <option value="user" <?php if ($user['role'] == 'user') echo 'selected'; ?>>User</option>
        <option value="seller" <?php if ($user['role'] == 'seller') echo 'selected'; ?>>Seller</option>
        <option value="admin" <?php if ($user['role'] == 'admin') echo 'selected'; ?>>Admin</option>
    </select>

    <button type="submit">Update User</button>
</form>

<?php include '../includes/footer.php'; ?>