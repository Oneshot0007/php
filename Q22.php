<!DOCTYPE html>
<html>
<head>
    <title>Greatest of Two Numbers</title>
</head>
<body>

<form method="post">
    Number 1: <input type="number" name="n1" required><br><br>
    Number 2: <input type="number" name="n2" required><br><br>
    <input type="submit" value="Find Greatest">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    if ($n1 > $n2) {
        echo "<h3>$n1 is the greatest</h3>";
    } elseif ($n2 > $n1) {
        echo "<h3>$n2 is the greatest</h3>";
    } else {
        echo "<h3>Both numbers are equal.</h3>";
    }
}
?>

</body>
</html>
