<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rentall Marketplace</title>

<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  background: #f7f7f7;
}

/* Navbar */
.navbar {
  display: flex;
  justify-content: space-between;
  padding: 15px 40px;
  background: white;
  box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.logo {
  font-size: 22px;
  font-weight: bold;
  color: #ff385c;
}

.nav-links a {
  margin-left: 20px;
  text-decoration: none;
  color: #333;
}

/* Hero */
.hero {
  padding: 60px 40px;
  text-align: center;
  background: linear-gradient(135deg, #ff385c, #ff7a18);
  color: white;
}

.hero h1 {
  font-size: 40px;
}

.search-box {
  margin-top: 20px;
}

.search-box input {
  padding: 12px;
  width: 300px;
  border-radius: 30px;
  border: none;
}

.search-box button {
  padding: 12px 20px;
  border-radius: 30px;
  border: none;
  background: black;
  color: white;
  cursor: pointer;
}

/* Categories */
.categories {
  display: flex;
  gap: 20px;
  padding: 30px 40px;
  overflow-x: auto;
}

.category {
  background: white;
  padding: 15px 25px;
  border-radius: 20px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.05);
  cursor: pointer;
}

/* Products */
.products {
  padding: 40px;
}

.products h2 {
  margin-bottom: 20px;
}

.product-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  gap: 20px;
}

.card {
  background: white;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 5px 15px rgba(0,0,0,0.08);
}

.card img {
  width: 100%;
  height: 180px;
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
  margin-top: 10px;
  display: block;
  text-align: center;
  padding: 10px;
  background: black;
  color: white;
  border-radius: 10px;
  text-decoration: none;
}

/* Footer */
.footer {
  text-align: center;
  padding: 20px;
  background: white;
  margin-top: 40px;
}
</style>

</head>
<body>

<!-- Navbar -->
<div class="navbar">
  <div class="logo">Rentall</div>
  <div class="nav-links">
    <a href="#">Home</a>
    <a href="#">Categories</a>
    <a href="#">Login</a>
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
  <div class="category">🎉 Events</div>
</div>

<!-- Products -->
<div class="products">
  <h2>🔥 Trending Rentals</h2>

  <div class="product-grid">

    <div class="card">
      <img src="https://via.placeholder.com/300">
      <div class="card-body">
        <h3>Canon Camera</h3>
        <p class="price">₹500/day</p>
        <a href="#" class="btn">Rent Now</a>
      </div>
    </div>

    <div class="card">
      <img src="https://via.placeholder.com/300">
      <div class="card-body">
        <h3>Luxury Car</h3>
        <p class="price">₹3000/day</p>
        <a href="#" class="btn">Rent Now</a>
      </div>
    </div>

    <div class="card">
      <img src="https://via.placeholder.com/300">
      <div class="card-body">
        <h3>Drill Machine</h3>
        <p class="price">₹200/day</p>
        <a href="#" class="btn">Rent Now</a>
      </div>
    </div>

  </div>
</div>

<!-- Footer -->
<div class="footer">
  © 2026 Rentall Marketplace
</div>

</body>
</html>