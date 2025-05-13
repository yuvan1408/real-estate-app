<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Place Location</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9f9f9;
      color: #333;
    }

    header {
      background-color: #4a90e2;
      color: white;
      padding: 20px;
      text-align: center;
    }

    .container {
      padding: 30px;
      max-width: 800px;
      margin: auto;
    }

    .map-placeholder {
      width: 100%;
      height: 400px;
      background-color: #ddd;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #555;
      font-size: 1.2rem;
      border-radius: 10px;
      margin-bottom: 30px;
    }

    .info {
      line-height: 1.6;
    }

    .info h2 {
      margin-bottom: 10px;
    }

    footer {
      text-align: center;
      padding: 20px;
      color: #aaa;
    }
  </style>
</head>
<body>

  <header>
    <h1>Our Location</h1>
  </header>

  <div class="container">
    <div class="map-placeholder">
      Map placeholder (e.g., Google Maps iframe)
    </div>

    <div class="info">
      <h2>Visit Us</h2>
      <p>123 Example Street<br />
      City, Country 12345</p>

      <h2>Contact</h2>
      <p>Email: info@example.com<br />
      Phone: +123 456 7890</p>
    </div>
  </div>

  <footer>
    &copy; 2025 Your Company Name. All rights reserved.
  </footer>

</body>
</html>
