<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>
</head>
<body>

<?php
// Create cookie
if (!isset($_COOKIE['username'])) {
    setcookie('username', 'Karan', time() + 3600);
    echo 'Cookie "username" is set.<br>';
} else {
    echo 'Cookie "username" value is: ' . $_COOKIE['username'] . '<br>';
}

// Modify cookie
if (isset($_GET['modify'])) {
    setcookie('username', 'Rohit', time() + 3600);
    echo 'Cookie "username" has been modified to "Rohit".<br>';
}

// Delete cookie
if (isset($_GET['delete'])) {
    setcookie('username', '', time() - 3600);
    echo 'Cookie "username" has been deleted.<br>';
}
?>

<br><a href="?modify=true">Modify cookie</a>
<br><a href="?delete=true">Delete cookie</a>

</body>
</html>
