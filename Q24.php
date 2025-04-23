<!DOCTYPE html>
<html>
<head>
    <title>Customer Form</title>
</head>
<body>

<h2>Customer Details Form</h2>
<form method="post">
  <label for="name">Emp Name: </label>
  <input type="text" name="name" id="name" required><br><br>

  <label for="address">Emp Address: </label>
  <textarea name="address" id="address" required></textarea><br><br>

  <label for="mobile">Emp Phone No: </label>
  <input type="tel" name="mobile" id="mobile" pattern="[0-9]{10}" required><br><br>

  <label for="salary">Select Salary:</label>
  <select name="item" id="salary" required>
    <option value="1000">1000</option>
    <option value="2000">2000</option> <!-- Corrected this option -->
    <option value="3000">3000</option> <!-- Added a different value for clarity -->
    <option value="4000">4000</option> <!-- Added another different value -->
  </select><br><br>

  <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Receive the data from the form
    $name = $_POST['name'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $salary = $_POST['item']; // Changed variable name from $amount to $salary for clarity

    // Display the submitted data
    echo "<h2>Submitted Customer Details</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<p><strong>Mobile No:</strong> $mobile</p>";
    echo "<p><strong>Salary:</strong> ₹$salary</p>"; 
}
?>

</body>
</html>
