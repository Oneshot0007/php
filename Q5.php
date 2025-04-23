<?php

// Define the array of numbers
$numArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// Loop through each number in the array
foreach ($numArray as $num) {
    // Check if the number is even or odd
    if ($num % 2 == 0) {
        echo "$num is EVEN<br>";
    } else {
        echo "$num is ODD<br>";
    }
}

?>
