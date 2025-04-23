<?php

function calArea($len,$bred){
$area = $len*$bred;
return $area;
}

$len=2;
$bred=4;
$area=calArea($len,$bred);

echo "Area is : $area";
?>