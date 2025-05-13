<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>My Property</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
      color: #333;
    }

    header {
      background-color: #2c3e50;
      color: white;
      padding: 40px 20px;
      text-align: center;
    }

    header h1 {
      margin: 0;
      font-size: 2.5rem;
    }

    .property-container {
      max-width: 900px;
      margin: 40px auto;
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    }

    .property-image img {
      width: 100%;
      height: auto;
      display: block;
    }

    .property-info {
      padding: 30px;
    }

    .property-info h2 {
      margin-top: 0;
      color: #2c3e50;
    }

    .property-info p {
      font-size: 1rem;
      line-height: 1.6;
      color: #555;
    }

    .details {
      margin-top: 20px;
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
    }

    .details div {
      background-color: #ecf0f1;
      padding: 10px 15px;
      border-radius: 5px;
      font-size: 0.95rem;
    }

    footer {
      text-align: center;
      padding: 20px;
      color: #aaa;
      font-size: 0.9rem;
      margin-top: 40px;
    }
  </style>
</head>
<body>

  <header>
    <h1>My Property</h1>
    <p>View details of your listed property</p>
  </header>

  <div class="property-container">
    <div class="property-image">
      <img src="c:\Users\suriy\Downloads\pexels-binyaminmellish-186077.jpg" alt="Property Image">
    </div>
    <div class="property-info">
      <h2>Elegant Family Home</h2>
      <p>This beautiful 3-bedroom, 2-bathroom home is located in a peaceful neighborhood with easy access to schools, parks, and shopping centers. Perfect for families looking for comfort and convenience.</p>
      
      <div class="details">
        <div>🏠 3 Bedrooms</div>
        <div>🛁 2 Bathrooms</div>
        <div>📍 Springfield, IL</div>
        <div>📐 1,850 sq ft</div>
        <div>💰 $250,000</div>
      </div>
    </div>
  </div>

  <footer>
    &copy; 2025 My Property Listings. All rights reserved.
  </footer>

</body>
</html>
