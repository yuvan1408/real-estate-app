<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Our Properties</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f5f5f5;
      color: #333;
    }

    header {
      background-color: #34495e;
      color: white;
      padding: 40px 20px;
      text-align: center;
    }

    header h1 {
      margin: 0;
      font-size: 2.8rem;
    }

    .container {
      max-width: 1100px;
      margin: 40px auto;
      padding: 0 20px;
    }

    .property-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
    }

    .property-card {
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 6px 16px rgba(0,0,0,0.08);
      transition: transform 0.3s ease;
    }

    .property-card:hover {
      transform: scale(1.02);
    }

    .property-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .property-details {
      padding: 20px;
    }

    .property-details h3 {
      margin: 0 0 10px;
      color: #2c3e50;
    }

    .property-details p {
      font-size: 0.95rem;
      color: #666;
    }

    footer {
      text-align: center;
      padding: 30px;
      color: #999;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

  <header>
    <h1>Featured Properties</h1>
    <p>Explore our handpicked listings just for you</p>
  </header>

  <div class="container">
    <div class="property-grid">
      <div class="property-card">
        <img src="https://via.placeholder.com/400x180" alt="Property 1">
        <div class="property-details">
          <h3>Modern Apartment</h3>
          <p>2 Beds • 2 Baths • City View • $1,200/mo</p>
        </div>
      </div>

      <div class="property-card">
        <img src="https://via.placeholder.com/400x180" alt="Property 2">
        <div class="property-details">
          <h3>Luxury Villa</h3>
          <p>4 Beds • 3 Baths • Pool • $3,500/mo</p>
        </div>
      </div>

      <div class="property-card">
        <img src="https://via.placeholder.com/400x180" alt="Property 3">
        <div class="property-details">
          <h3>Cozy Studio</h3>
          <p>1 Bed • 1 Bath • Downtown • $900/mo</p>
        </div>
      </div>
    </div>
  </div>

  <footer>
    &copy; 2025 Your Realty Company. All rights reserved.
  </footer>

</body>
</html>
