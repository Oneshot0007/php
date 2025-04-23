<?php
$conn = new mysqli('localhost', 'root', '', 'student');

if ($conn->connect_error) {
    echo 'Connection failed :'.$conn->connect_error.'<br>';
}

$sql = "UPDATE std_info SET Name='Rohit' WHERE RollNo = 18";

if ($conn->query($sql)) {
    echo 'Record Updated : <br>';   
} else {
    echo 'Record Not Updated : <br>';
}

$conn->close();
?>
