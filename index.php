<?php
session_start();
require_once 'includes/db.php';

// Fetch trending products (e.g., the 6 most recent)
$stmt = $conn->prepare("SELECT id, name, price, image FROM products ORDER BY created_at DESC LIMIT 6");
$stmt->execute();
$result = $stmt->get_result();
$products = $result->fetch_all(MYSQLI_ASSOC);
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rentall Marketplace</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
body {
  font-family: 'Poppins', sans-serif;
  margin: 0;
  background: #f4f6f9;
}

/* Navbar */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 40px;
  background: rgba(255,255,255,0.7);
  backdrop-filter: blur(10px);
}

.nav-links a {
    margin-left: 20px;
    text-decoration: none;
    color: #333;
    font-weight: 600;
    transition: color 0.3s;
}

.nav-links a:hover {
    color: #ff385c;
}

.nav-links span {
    margin-right: 15px;
    font-weight: 400;
}

.logo {
  font-size: 24px;
  font-weight: 700;
  color: #ff385c;
}

/* Hero */
.hero {
  padding: 80px 20px;
  text-align: center;
  background: linear-gradient(135deg, #ff385c, #ff7a18);
  color: white;
}

.search-box input {
  padding: 14px;
  width: 280px;
  border-radius: 30px;
  border: none;
}

.search-box button {
  padding: 14px 20px;
  border-radius: 30px;
  border: none;
  background: black;
  color: white;
}

/* Categories */
.categories {
  display: flex;
  gap: 20px;
  padding: 30px;
  overflow-x: auto;
}

.category {
  background: white;
  padding: 12px 20px;
  border-radius: 30px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.08);
}

/* Products */
.products {
  padding: 40px;
}

.product-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  gap: 25px;
}

.card {
  background: white;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0,0,0,0.1);
  transition: 0.3s;
}

.card:hover {
  transform: translateY(-10px);
}

.card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.card-body {
  padding: 15px;
}

.price {
  color: #ff385c;
  font-weight: bold;
}

.btn {
  display: block;
  text-align: center;
  padding: 10px;
  background: linear-gradient(135deg, #ff385c, #ff7a18);
  color: white;
  border-radius: 10px;
  text-decoration: none;
  margin-top: 10px;
}
</style>
</head>

<body>

<!-- Navbar -->
<div class="navbar">
  <div class="logo">Rentall</div>
  <div class="nav-links">
    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
        <span>Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?>!</span>
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    <?php endif; ?>
  </div>
</div>

<!-- Hero -->
<div class="hero">
  <h1>Rent Anything, Anytime</h1>
  <p>Find the best rental products near you</p>
  <div class="search-box">
    <input type="text" placeholder="Search products...">
    <button>Search</button>
  </div>
</div>

<!-- Categories -->
<div class="categories">
  <div class="category">🚗 Cars</div>
  <div class="category">📷 Cameras</div>
  <div class="category">🛠 Tools</div>
  <div class="category">🪑 Furniture</div>
</div>

<!-- Products -->
<div class="products">
  <h2>🔥 Trending Rentals</h2>

  <div class="product-grid">

    <?php foreach($products as $p): ?>
      <div class="card">
        <img src="<?php echo !empty($p['image']) ? htmlspecialchars($p['image']) : 'https://via.placeholder.com/300'; ?>" alt="<?php echo htmlspecialchars($p['name']); ?>">
        <div class="card-body">
          <h3><?php echo htmlspecialchars($p['name']); ?></h3>
          <p class="price">₹<?php echo htmlspecialchars(number_format($p['price'], 2)); ?>/day</p>
          <a href="product_detail.php?id=<?php echo $p['id']; ?>" class="btn">View Details</a>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</div>

</body>
</html>