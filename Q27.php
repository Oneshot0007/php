<?php
$conn = new mysqli('localhost', 'root', '', 'prac');

if ($conn->connect_error) {
    echo 'Connection failed : '.$conn->connect_error.'<br>';
}

$result = $conn->query("SELECT * FROM 27th");

echo '<h3>Student Info</h3>';
if ($result->num_rows > 0) {
    while ($rows = $result->fetch_assoc()) {
        echo 'Name :'.$rows['Name'].'<br>';
        echo 'age :'.$rows['age'].'<br>';
        echo 'city :'.$rows['city'].'<br>';
        echo 'phone :'.$rows['phone'].'<br>';
    }
}

$conn->close();
?>
