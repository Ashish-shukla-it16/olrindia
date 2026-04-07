<?php
$products = [
    [
        "name" => "Canon Camera",
        "price" => "₹500/day",
        "image" => "https://via.placeholder.com/300"
    ],
    [
        "name" => "Luxury Car",
        "price" => "₹3000/day",
        "image" => "https://via.placeholder.com/300"
    ],
    [
        "name" => "Drill Machine",
        "price" => "₹200/day",
        "image" => "https://via.placeholder.com/300"
    ]
];
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
  padding: 15px 40px;
  background: rgba(255,255,255,0.7);
  backdrop-filter: blur(10px);
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
        <img src="<?php echo $p['image']; ?>">
        <div class="card-body">
          <h3><?php echo $p['name']; ?></h3>
          <p class="price"><?php echo $p['price']; ?></p>
          <a href="#" class="btn">Rent Now</a>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</div>

</body>
</html>