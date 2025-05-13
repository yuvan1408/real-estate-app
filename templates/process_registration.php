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
    $ownerName       = $_POST['owner-name'];
    $ownerEmail      = $_POST['owner-email'];
    $ownerPhone      = $_POST['owner-phone'];
    $landTitle       = $_POST['land-title'];
    $landSize        = $_POST['land-size'];
    $landLocation    = $_POST['land-location'];
    $landOwnership   = $_POST['land-ownership'];
    $landLegalStatus = $_POST['land-legal-status'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO land_registration (owner_name, owner_email, owner_phone, land_title, land_size, land_location, land_ownership, land_legal_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssisss", $ownerName, $ownerEmail, $ownerPhone, $landTitle, $landSize, $landLocation, $landOwnership, $landLegalStatus);

    if ($stmt->execute()) {
        echo "Land registered successfully! <a href='/real-estate-app/templates/home.php'>Go back to Home</a>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
