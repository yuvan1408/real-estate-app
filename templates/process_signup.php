<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$dbname = "real_estate"; // Corrected database name
$username = "root";
$password = ""; // Corrected password for XAMPP's default MySQL configuration

$conn = new mysqli($host, $username, $password, $dbname);

// Check DB connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name            = $_POST['name'];
    $email           = $_POST['email'];
    $password        = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $phone           = $_POST['phone'];
    $address         = $_POST['address'];
    $propertyType    = $_POST['property_type'];

    // Basic validation
    if ($password !== $confirmPassword) {
        die("Passwords do not match.");
    }

    // Secure password hashing
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (name, email, password, phone, address, property_type) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $hashedPassword, $phone, $address, $propertyType);

    if ($stmt->execute()) {
        echo "Account created successfully! <a href='/real-estate-app/templates/login.php'>Login here</a>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
