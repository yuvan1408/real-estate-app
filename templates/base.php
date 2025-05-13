<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{% block title %}Page{% endblock %}</title>
    <style>
        body { margin: 0; font-family: Arial, sans-serif; background: #f4f4f4; }
        nav { background: #2c3e50; padding: 10px; }
        nav a {
            color: white; text-decoration: none;
            margin: 0 10px; font-weight: bold;
        }
        nav a:hover { text-decoration: underline; }
        .container { padding: 20px; }
    </style>
</head>
<body>
<nav>
    <a href="/">Home</a>
    <a href="/login">Login</a>
    <a href="/signup">Signup</a>
    <a href="/placeholder">Placeholder</a>
    <a href="/base">Base</a>
    <a href="/placelocation">Place Location</a>
    <a href="/assurance">Assurance</a>
    <a href="/myproperty">My Property</a>
    <a href="/about">About</a>
    <a href="/property">Property</a>
    <a href="/price">Price</a>
    <a href="/reservation">Reservation</a>
    <a href="/registration">Registration</a>
    <a href="/broker">Broker</a>
    <a href="/landvalue">Land Value</a>
    <a href="/landview">Land View</a>
</nav>

<div class="container">
    {% block content %}{% endblock %}
</div>
</body>
</html>
