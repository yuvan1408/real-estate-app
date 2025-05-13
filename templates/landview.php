<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Land Value Estimation (INR)</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9f9f9;
      color: #333;
    }

    header {
      background-color: #2980b9;
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

    .land-value-card {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 30px;
    }

    .land-value-card h2 {
      font-size: 2rem;
      text-align: center;
      margin-bottom: 20px;
    }

    .land-value-card .detail {
      margin-bottom: 15px;
      font-size: 1.1rem;
      line-height: 1.8;
    }

    .land-value-card .label {
      font-weight: bold;
    }

    .estimate-container {
      margin-top: 40px;
    }

    .estimate-container input,
    .estimate-container select,
    .estimate-container button {
      padding: 10px;
      margin: 10px 0;
      font-size: 1rem;
      border-radius: 5px;
      border: 1px solid #ccc;
      width: 100%;
    }

    .cta-btn {
      background-color: #2980b9;
      color: white;
      padding: 15px 30px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 1.1rem;
      width: 100%;
    }

    footer {
      text-align: center;
      padding: 20px;
      color: #aaa;
      margin-top: 40px;
    }

    .note {
      margin-top: 30px;
      padding: 20px;
      background-color: #f1c40f;
      border-radius: 5px;
      font-size: 1.1rem;
      color: #333;
      text-align: center;
    }
  </style>
</head>
<body>

  <header>
    <h1>Land Value Estimation (INR)</h1>
    <p>Estimate your land's value in Indian Rupees (₹)</p>
  </header>

  <div class="container">

    <!-- Land Value Details -->
    <div class="land-value-card">
      <h2>Land Details</h2>
      <div class="detail">
        <span class="label">Land Title:</span> Green Valley Lot #5
      </div>
      <div class="detail">
        <span class="label">Location:</span> 123 Green Valley, Some Town, State
      </div>
      <div class="detail">
        <span class="label">Size:</span> 10 Acres
      </div>
      <div class="detail">
        <span class="label">Market Value (Estimated):</span> ₹37,50,000
      </div>
      <div class="detail">
        <span class="label">Valuation Date:</span> April 2025
      </div>
      <div class="detail">
        <span class="label">Valuation Method:</span> Comparative Market Analysis (CMA)
      </div>
    </div>

    <!-- Land Value Estimation Form -->
    <div class="land-value-card">
      <h2>Estimate Your Land Value</h2>

      <div class="estimate-container">
        <label for="land-size">Land Size (Acres):</label>
        <input type="number" id="land-size" placeholder="Enter size in acres" min="1" required>

        <label for="land-location">Location:</label>
        <select id="land-location">
          <option value="urban">Urban Area</option>
          <option value="suburban">Suburban Area</option>
          <option value="rural">Rural Area</option>
        </select>

        <button class="cta-btn" id="estimate-btn">Estimate Land Value</button>
      </div>

      <!-- Estimated Value Display -->
      <div id="estimated-value" style="display: none; text-align: center; margin-top: 20px;">
        <h3>Estimated Land Value:</h3>
        <p id="calculated-value" style="font-size: 1.5rem; font-weight: bold;"></p>
      </div>
    </div>

    <!-- Market Value Information -->
    <div class="note">
      <h3>How to Check the Market Value of Your Land?</h3>
      <p>The market value of your land is determined by several factors:</p>
      <ul>
        <li><strong>Location:</strong> Urban and suburban areas tend to have higher land value compared to rural locations.</li>
        <li><strong>Land Size:</strong> The larger the land, the higher the value (typically in per acre rates).</li>
        <li><strong>Zoning and Usage:</strong> Land zoned for residential or commercial use may fetch higher prices.</li>
        <li><strong>Proximity to Infrastructure:</strong> Proximity to roads, highways, schools, and other infrastructure increases land value.</li>
      </ul>
      <p>You can check the market value by contacting local real estate agents or using government portals for official land valuations.</p>
    </div>

  </div>

  <footer>
    &copy; 2025 Your Company Name. All rights reserved.
  </footer>

  <script>
    // Land value estimation function
    document.getElementById('estimate-btn').addEventListener('click', function() {
      const landSize = parseFloat(document.getElementById('land-size').value);
      const location = document.getElementById('land-location').value;

      // Base price per acre depending on location (example values)
      let pricePerAcre = 0;
      if (location === 'urban') {
        pricePerAcre = 5000000; // Example: ₹5,00,000 per acre for Urban areas
      } else if (location === 'suburban') {
        pricePerAcre = 3500000; // ₹3,50,000 per acre for Suburban areas
      } else if (location === 'rural') {
        pricePerAcre = 2500000; // ₹2,50,000 per acre for Rural areas
      }

      // Calculate estimated value in INR
      if (landSize > 0) {
        const estimatedValue = landSize * pricePerAcre;
        document.getElementById('calculated-value').textContent = `₹${estimatedValue.toLocaleString()}`;
        document.getElementById('estimated-value').style.display = 'block'; // Show the result
      } else {
        alert('Please enter a valid land size.');
      }
    });
  </script>

</body>
</html>
