<!DOCTYPE html>
<html>
<head>
    <title>Calculation Result</title>
</head>
<body>

<h2>Calculation Result</h2>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Receive input from the form
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    // Perform the calculation based on the selected operator
    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Error: Division by zero is not allowed.";
            }
            break;
        case '%':
            $result = $num1 % $num2;
            break;
        default:
            $result = "Invalid operator!";
            break;
    }

    // Display the result
    echo "<p><strong>Result:</strong> $result</p>";
} else {
    echo "<p>No data received.</p>";
}
?>

<a href="Q25.html">Back to Calculator</a>

</body>
</html>
