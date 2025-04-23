<!DOCTYPE html>
<html>
<head>
    <title>Customer Form</title>
</head>
<body>

<h2>Customer Details Form</h2>
<form method="post" action="cust.php">
  <label for="name">Name: </label>
  <input type="text" name="name" id="name" required><br><br>

  <label for="address">Address: </label>
  <textarea name="address" id="address" required></textarea><br><br>

  <label for="mobile">Phone No: </label>
  <input type="tel" name="mobile" id="mobile" pattern="[0-9]{10}" required><br><br>

  <label>Item Purchased:</label>
  <select name="item" required>
    <option value="Laptop">Laptop</option>
    <option value="Mobile">Mobile</option>
    <option value="Headphones">Headphones</option>
    <option value="TV">TV</option>
  </select><br><br>

  <label for="amount">Amount: </label>
  <input type="number" name="amount" id="amount" required><br><br>

  <input type="submit" value="Submit">
</form>

</body>
</html>
