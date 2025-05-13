<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pricing</title>
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
      padding: 30px 20px;
      text-align: center;
    }

    header h1 {
      margin: 0;
      font-size: 2.5rem;
    }

    .container {
      padding: 40px;
      max-width: 1000px;
      margin: auto;
    }

    .pricing-table {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
      margin-top: 20px;
    }

    .pricing-card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
    }

    .pricing-card h3 {
      color: #2c3e50;
      font-size: 1.8rem;
      margin-bottom: 10px;
    }

    .price {
      font-size: 2rem;
      color: #e74c3c;
      margin-bottom: 20px;
    }

    .pricing-card p {
      color: #555;
      font-size: 1rem;
      line-height: 1.6;
    }

    .cta-btn {
      background-color: #2c3e50;
      color: white;
      padding: 15px 30px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
      display: inline-block;
      margin-top: 20px;
    }

    footer {
      text-align: center;
      padding: 20px;
      color: #aaa;
      margin-top: 40px;
    }
  </style>
</head>
<body>

  <header>
    <h1>Our Pricing</h1>
    <p>Choose the best plan for you</p>
  </header>

  <div class="container">
    <h2>Pricing Plans</h2>
    <div class="pricing-table">
      <!-- Basic Plan -->
      <div class="pricing-card">
        <h3>Basic Plan</h3>
        <div class="price">$99/month</div>
        <p>Perfect for individuals and small businesses.</p>
        <p>Includes 1 property, email support, and basic features.</p>
        <a href="reservation.html" class="cta-btn">Book Now</a>
      </div>

      <!-- Standard Plan -->
      <div class="pricing-card">
        <h3>Standard Plan</h3>
        <div class="price">$199/month</div>
        <p>For growing businesses that need more flexibility.</p>
        <p>Includes 5 properties, priority support, and advanced features.</p>
        <a href="reservation.html" class="cta-btn">Book Now</a>
      </div>

      <!-- Premium Plan -->
      <div class="pricing-card">
        <h3>Premium Plan</h3>
        <div class="price">$399/month</div>
        <p>Designed for large businesses and enterprises.</p>
        <p>Includes unlimited properties, 24/7 support, and premium features.</p>
        <a href="reservation.html" class="cta-btn">Book Now</a>
      </div>
    </div>
  </div>

  <footer>
    &copy; 2025 Your Company Name. All rights reserved.
  </footer>

</body>
</html>
