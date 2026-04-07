<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../login.php');
    exit;
}
require_once '../includes/db.php';
include '../includes/header.php';

$sql = "SELECT id, name, email, role FROM users";
$result = $conn->query($sql);
?>

<h1>Manage Users</h1>

<table>
    <thead>
        <tr>
            <th>User Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["name"] . '</td>';
                echo '<td>' . $row["email"] . '</td>';
                echo '<td>' . $row["role"] . '</td>';
                echo '<td>';
                echo '<a href="edit_user.php?id=' . $row["id"] . '">Edit</a> | ';
                echo '<a href="delete_user.php?id=' . $row["id"] . '">Delete</a>';
                echo '</td>';
                echo '</tr>';
            }
        } else {
            echo "<tr><td colspan='4'>No users found</td></tr>";
        }
        ?>
    </tbody>
</table>

<?php include '../includes/footer.php'; ?>