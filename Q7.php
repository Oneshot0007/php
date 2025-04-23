<?php

//while

echo "using while loop";
$i = 1;
while ($i <= 30) {
    if ($i % 2 == 0) {
        echo "$i <br>"; 
    }
    $i++;
}

echo "using do..while loop";
$i = 1; // Initialize $i again for do-while loop
do {
    if ($i % 2 == 0) {
        echo "$i <br>";
    }
    $i++; // Increment $i
} while ($i <= 30); // Continue loop as long as $i is less than or equal to 30
?>