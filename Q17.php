<!DOCTYPE html>
<html>
<head></head>
<body>

<form method="post">
    Name: <input type="text" name="name"><br><br>
    Age: <input type="number" name="age"><br><br>
    Gender: 
    <input type="radio" value="Male" name="gender"> Male
    <input type="radio" value="Female" name="gender"> Female<br><br>
    <input type="submit" value="Submit">
</form>

<?php 
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['gender'] = $_POST['gender'];
}

$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Not set';
$age = isset($_SESSION['age']) ? $_SESSION['age'] : 'Not set';
$gender = isset($_SESSION['gender']) ? $_SESSION['gender'] : 'Not set';

echo "<h3>Session Data</h3>";
echo "Name: $name<br>";
echo "Age: $age<br>";
echo "Gender: $gender<br>";

?>

</body>
</html>
