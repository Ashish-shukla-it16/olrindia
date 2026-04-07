<?php include 'includes/header.php'; ?>

<h1>Login</h1>

<form action="login_handler.php" method="POST">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Login</button>
</form>

<?php include 'includes/footer.php'; ?>