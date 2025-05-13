<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    header("Location: /real-estate-app/templates/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 60px 20px;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            color: white;
            animation: fadeIn 1.5s ease-in-out;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        }

        .hero img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 600px;
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

        nav {
            margin-top: 20px;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.2);
            transition: background-color 0.3s, color 0.3s;
        }

        nav a:hover {
            background-color: #ffffff;
            color: #6e8efb;
        }
    </style>
</head>
<body>
    <div class="hero">
        <img src="/real-estate-app/assets/images/banner1.jpg" alt="Banner Image">
        <h1>Welcome to the Real Estate App</h1>
        <p>Hello, <?php echo htmlspecialchars($_SESSION['user_email']); ?>!</p>
        <p>This is the starting point of the Real Estate app. Find your dream property with us!</p>
        <nav>
            <a href="/real-estate-app/templates/myproperty.php">My Property</a>
            <a href="/real-estate-app/templates/price.php">Pricing</a>
            <a href="/real-estate-app/templates/reservation.php">Reservation</a>
            <a href="/real-estate-app/templates/registration.php">Registration</a>
            <a href="/real-estate-app/templates/broker.php">Brokers</a>
            <a href="/real-estate-app/templates/landvalue.php">Land Value</a>
            <a href="/real-estate-app/templates/logout.php">Logout</a>
        </nav>
    </div>
</body>
</html>
