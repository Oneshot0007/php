<!DOCTYPE html>
<html>
<head></head>
<body>


<form method="post">
  Enter Month Number (1-12): <input type="text" name="month" required><br><br>
  <input type="submit" name="submit" value="Check Month">
</form>
<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
$month=$_POST['month'];

switch($month){

case 1:
echo "ITS JANEVARY";
break;
case 2:
echo "ITS FEBEVERY";
break;
case 3:
echo "ITS MARCH";
break;
case 4:
echo "ITS APRIL";
break;
case 5:
echo "ITS MAY";
break;
case 6:
echo "ITS JUNE";
break;
case 7:
echo "ITS JULY";
break;
case 8:
echo "ITS AUGEST";
break;
case 9:
echo "ITS SEPTMBER";
break;
case 10:
echo "ITS OCTOMBER";
break;
case 11:
echo "ITS NOVEMBER";
break;
case 12:
echo "IT   DECMBER";
break;

default:
echo "Invalid month";

}

}


?>
</body>
</html>