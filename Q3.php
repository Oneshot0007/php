<!DOCTYPE html>
<html>
<head></head>
<body>

<form method="post">
Enter number<input type="number" name="number">
<input type="submit">

</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{

$number=$_POST['number'];


if($number < 0){

echo "$number can't be Negative !<br>";
}

elseif($number >0){
echo "$number is grater then 0<br>";
 }

else{
echo "number is Zero<br>";
}

}

?>
</body>
</html>