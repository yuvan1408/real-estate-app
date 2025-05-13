<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Broker Information</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
      color: #333;
    }

    header {
      background-color: #34495e;
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

    .broker-card {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 30px;
      text-align: center;
    }

    .broker-card img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin-bottom: 20px;
    }

    .broker-card h2 {
      font-size: 1.8rem;
      margin: 10px 0;
    }

    .broker-card p {
      font-size: 1.1rem;
      line-height: 1.6;
    }

    .broker-card .contact-info {
      margin-top: 20px;
    }

    .contact-info a {
      color: #3498db;
      text-decoration: none;
      font-size: 1.1rem;
      margin: 5px;
    }

    .search-container {
      margin-bottom: 40px;
      text-align: center;
    }

    .search-container input[type="text"] {
      padding: 10px;
      font-size: 1.1rem;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 50%;
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
    <h1>Find Your Broker</h1>
    <p>Search for brokers, view their details, and get in touch</p>
  </header>

  <div class="container">
    <!-- Search Brokers -->
    <div class="search-container">
      <h2>Search for a Broker</h2>
      <input type="text" id="broker-search" placeholder="Search by name, location...">
    </div>

    <!-- Broker Card -->
    <div class="broker-card">
      <img src="c:\Users\suriy\Downloads\successful-real-estate-property-brokers-technique-1200x900.jpg" alt="Broker Image">
      <h2>Jane Doe</h2>
      <p>Experienced Real Estate Broker with over 10 years in the industry, specializing in residential properties.</p>

      <div class="contact-info">
        <a href="mailto:jane.doe@example.com">Email Jane</a>
        <a href="tel:+1234567890">Call Jane</a>
        <a href="https://www.linkedin.com/in/jane-doe" target="_blank">LinkedIn</a>
      </div>
    </div>

    <!-- Broker Card -->
    <div class="broker-card">
      <img src="c:\Users\suriy\Downloads\handsome-real-estate-agent-holding-banner-house-sale-land-insurance-business-man-suit-presenting-trying-to-306971957.webp" alt="Broker Image">
      <h2>John Smith</h2>
      <p>Specializing in commercial properties, John has a decade of experience in helping businesses find their ideal space.</p>

      <div class="contact-info">
        <a href="mailto:john.smith@example.com">Email John</a>
        <a href="tel:+0987654321">Call John</a>
        <a href="https://www.linkedin.com/in/john-smith" target="_blank">LinkedIn</a>
      </div>
    </div>

    <!-- Add more broker cards as needed -->

  </div>

  <footer>
    &copy; 2025 Your Company Name. All rights reserved.
  </footer>

  <script>
    // You can add JavaScript for searching brokers dynamically if needed
    const searchInput = document.getElementById('broker-search');
    searchInput.addEventListener('input', function() {
      const searchTerm = searchInput.value.toLowerCase();
      const brokerCards = document.querySelectorAll('.broker-card');
      brokerCards.forEach(card => {
        const name = card.querySelector('h2').textContent.toLowerCase();
        if (name.includes(searchTerm)) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    });
  </script>

</body>
</html>
