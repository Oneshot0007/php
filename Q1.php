<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h2> Find Highest Number </h2>
<form method="post">

Number 1:<input type="number" name="n1"><br>
Number 2:<input type="number" name="n2"><br>
Number 3:<input type="number" name="n3"><br>
<input type="submit" value="Find Highest">
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
$n1=$_POST["n1"];
$n2=$_POST["n2"];
$n3=$_POST["n3"];

if($n1>$n2 && $n1>$n3){
echo "$n1 is Highest !";
}
elseif($n2>$n1 && $n2>$n3)
{
echo "$n2 is Highest !";
}
else{
echo "$n3 is highest!";
}
}
?>
</body>
</html>