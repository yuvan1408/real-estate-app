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
  <title>Reservation</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
      color: #333;
    }

    header {
      background-color: #4a90e2;
      color: white;
      padding: 30px 20px;
      text-align: center;
    }

    header h1 {
      margin: 0;
      font-size: 2.5rem;
    }

    .container {
      padding: 30px;
      max-width: 800px;
      margin: auto;
    }

    .reservation-image {
      width: 100%;
      height: 350px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    .reservation-form {
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .reservation-form input, .reservation-form select, .reservation-form textarea {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .reservation-form button {
      background-color: #4a90e2;
      color: white;
      padding: 15px 30px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 1rem;
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
    <h1>Make a Reservation</h1>
  </header>

  <div class="container">
    <!-- Reservation Image -->
    <img src="c:\Users\suriy\Downloads\reservation-land-25474227.webp" alt="Reservation" class="reservation-image">

    <div class="reservation-form">
      <h2>Reservation Details</h2>
      <form action="process_reservation.php" method="post">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your full name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="check-in">Check-In Date</label>
        <input type="date" id="check-in" name="check-in" required>

        <label for="check-out">Check-Out Date</label>
        <input type="date" id="check-out" name="check-out" required>

        <label for="guests">Number of Guests</label>
        <select id="guests" name="guests" required>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select>

        <label for="message">Special Requests</label>
        <textarea id="message" name="message" rows="4" placeholder="Any special requests?"></textarea>

        <button type="submit">Reserve Now</button>
      </form>
    </div>
  </div>

  <footer>
    &copy; 2025 Your Company Name. All rights reserved.
  </footer>

</body>
</html>
