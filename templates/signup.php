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
{% extends 'base.html' %}
{% block title %}Sign Up | Real Estate{% endblock %}

{% block content %}
<style>
  .page-wrapper {
    background: linear-gradient(135deg, #e0c3fc, #8ec5fc);
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Poppins', sans-serif;
  }

  .signup-container {
    background: #fff;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 400px;
    animation: fadeIn 0.8s ease-in-out;
  }

  .signup-container h2 {
    text-align: center;
    color: #5c4d9d;
    margin-bottom: 30px;
  }

  form {
    display: flex;
    flex-direction: column;
  }

  label {
    margin-bottom: 5px;
    font-weight: 600;
  }

  input,
  select {
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 6px;
  }

  .btn-signup {
    background-color: #5c4d9d;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-weight: 600;
    transition: background-color 0.3s ease;
  }

  .btn-signup:hover {
    background-color: #483d8b;
  }

  .login-link {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
  }

  .login-link a {
    color: #5c4d9d;
    text-decoration: none;
  }

  .login-link a:hover {
    text-decoration: underline;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>

<div class="page-wrapper">
  <div class="signup-container">
    <h2>Create Your Account</h2>
    <form action="process_signup.php" method="POST">
      <label for="name">Full Name</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email address</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>

      <label for="confirm_password">Confirm Password</label>
      <input type="password" id="confirm_password" name="confirm_password" required>

      <label for="phone">Phone Number</label>
      <input type="text" id="phone" name="phone" required>

      <label for="address">Address</label>
      <input type="text" id="address" name="address" required>

      <label for="property_type">What type of property are you interested in?</label>
      <select id="property_type" name="property_type" required>
        <option value="Apartment">Apartment</option>
        <option value="House">House</option>
        <option value="Land">Land</option>
        <option value="Commercial">Commercial</option>
      </select>

      <button type="submit" class="btn-signup">Sign Up</button>
    </form>
    <div class="login-link">
      Already have an account? <a href="login.php">Login here</a>
    </div>
  </div>
</div>
{% endblock %}
