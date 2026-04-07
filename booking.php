<?php include 'includes/header.php'; ?>

<h1>Book Product</h1>

<form action="booking_handler.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="date">Booking Date:</label>
    <input type="date" id="date" name="date" required>

    <button type="submit">Submit Booking</button>
</form>

<?php include 'includes/footer.php'; ?>