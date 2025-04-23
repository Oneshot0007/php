<?php

$num1=10;
$num2=30;

if ($num1 > $num2 && $num1 > 5) {
    echo "AND: $num1 is greater than $num2 AND greater than 5<br>";
}

if($num1<5 || $num2>15){
echo "OR: either $num1 is less then 5 OR $num2 is Greter then 15<br>";
}


if(!($num1==$num2)){
echo "$num1 is not equal to $num2<br>";
}
if($num1==10 xor $num2==30){
echo "xor give true condition<br>";
}

if($num1<$num2 and $num2>10){
echo "and:both conditions are true<br>";
}
if ($num1 == 5 or $num2 == 20) {
    echo "or: One condition is true<br>";
}

?>