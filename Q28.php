<?php
$conn = new mysqli('localhost', 'root', '', 'prac');

if ($conn->connect_error) {
    echo 'Connection failed :'.$conn->connect_error;
}

$sql = "INSERT INTO employee (Name, Age, City, Salary) VALUES ('Rohit', 22, 'Mumbai', 30000)";
if ($conn->query($sql) === TRUE) {
    echo 'Record Inserted : <br>';
} else {
    echo 'Insertion Failed : <br>';
}

$conn->close()
?>
