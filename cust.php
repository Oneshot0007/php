<!DOCTYPE html>
<html>
<head>
    <title>Customer Details</title>
</head>
<body>

<h2>Submitted Customer Details</h2>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Receive the data from the form
    $name = $_POST['name'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $item = $_POST['item'];
    $amount = $_POST['amount'];

    // Display the submitted data
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<p><strong>Mobile No:</strong> $mobile</p>";
    echo "<p><strong>Item Purchased:</strong> $item</p>";
    echo "<p><strong>Amount:</strong> ₹$amount</p>";
} else {
    echo "<p>No data received.</p>";
}
?>

</body>
</html>
