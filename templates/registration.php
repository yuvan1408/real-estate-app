<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "real_estate"; // Corrected database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Land Registration</title>
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

    .land-registration-form {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .land-registration-form h2 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 2rem;
    }

    .land-registration-form input, .land-registration-form textarea, .land-registration-form select {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .land-registration-form button {
      width: 100%;
      padding: 15px;
      background-color: #2c3e50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 1.1rem;
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
    <h1>Land Registration</h1>
    <p>Register your land easily with our secure system.</p>
  </header>

  <div class="container">
    <div class="land-registration-form">
      <h2>Land Registration Form</h2>
      <form action="/real-estate-app/templates/process_registration.php" method="post">
        <!-- Owner Information -->
        <label for="owner-name">Owner Name</label>
        <input type="text" id="owner-name" name="owner-name" placeholder="Enter full name" required>

        <label for="owner-email">Owner Email</label>
        <input type="email" id="owner-email" name="owner-email" placeholder="Enter email address" required>

        <label for="owner-phone">Owner Phone</label>
        <input type="tel" id="owner-phone" name="owner-phone" placeholder="Enter phone number" required>

        <!-- Land Details -->
        <label for="land-title">Land Title</label>
        <input type="text" id="land-title" name="land-title" placeholder="Enter land title" required>

        <label for="land-size">Land Size (in acres)</label>
        <input type="number" id="land-size" name="land-size" placeholder="Enter land size" required>

        <label for="land-location">Land Location</label>
        <textarea id="land-location" name="land-location" rows="4" placeholder="Provide a brief description of the location" required></textarea>

        <!-- Land Ownership Details -->
        <label for="land-ownership">Land Ownership Type</label>
        <select id="land-ownership" name="land-ownership" required>
          <option value="single">Single Owner</option>
          <option value="joint">Joint Ownership</option>
        </select>

        <label for="land-legal-status">Legal Status</label>
        <select id="land-legal-status" name="land-legal-status" required>
          <option value="clear">Clear Title</option>
          <option value="disputed">Disputed</option>
        </select>

        <button type="submit">Register Land</button>
      </form>
    </div>
  </div>

  <footer>
    &copy; 2025 Your Company Name. All rights reserved.
  </footer>

</body>
</html>
