<!DOCTYPE html>
<html>
<head>
    <title>GET Method Example</title>
</head>
<body>

<h2>Enter Your Details</h2>

<form method="get">
    Name: <input type="text" name="name" required><br><br>
    City: <input type="text" name="city" required><br><br>
    <input type="submit" value="Submit">
</form>

<?php

if (isset($_GET['name']) && isset($_GET['city'])) {
    $name = $_GET['name'];
    $city = $_GET['city'];

    echo "<h3>Received Data:</h3>";
    echo "Name: $name<br>";
    echo "City: $city<br>";
}
?>
</body>
</html>
