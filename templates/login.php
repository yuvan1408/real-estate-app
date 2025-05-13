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
{% block title %}Login | Real Estate{% endblock %}

{% block content %}
<style>
  body {
    background: linear-gradient(135deg, #d3cce3, #e9e4f0);
  }

  .login-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 80vh;
  }

  .login-card {
    width: 100%;
    max-width: 500px;
    background: #ffffff;
    padding: 50px 40px;
    border-radius: 16px;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
    animation: fadeIn 0.8s ease-in-out;
  }

  .login-card h2 {
    text-align: center;
    margin-bottom: 30px;
    color: #4b3bbd;
    font-weight: 700;
  }

  .form-label {
    font-weight: 500;
    margin-bottom: 6px;
    display: block;
  }

  .form-control {
    width: 80%;
    margin: 0 auto 16px auto;
    padding: 10px;
    font-size: 1rem;
    border-radius: 8px;
    border: 1px solid #ccc;
    display: block;
  }

  .btn-primary {
    background-color: #4b3bbd;
    border: none;
    padding: 10px 20px;
    font-size: 1rem;
    border-radius: 8px;
    width: 120px;
    margin: 0 auto;
    display: block;
  }

  .btn-primary:hover {
    background-color: #3b2fa0;
  }

  .bottom-text {
    margin-top: 20px;
    text-align: center;
    font-size: 0.95rem;
  }

  .bottom-text a {
    color: #4b3bbd;
    text-decoration: none;
  }

  .bottom-text a:hover {
    text-decoration: underline;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(25px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>

<div class="login-wrapper">
  <div class="login-card">
    <h2>Login</h2>
    <form action="/real-estate-app/templates/process_login.php" method="POST">
      <div class="text-center">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="email" required>
      </div>
      <div class="text-center">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" required>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <div class="bottom-text">
      Don't have an account? <a href="signup.php">Signup</a>
    </div>
  </div>
</div>
{% endblock %}
