<?php
//start
session_start();

//set value
$_SESSION['username']='Raju';
$_SESSION['RollNo']=25;

echo "Session Variables are Set :<br>";
echo "Username".$_SESSION['username'];
echo "ROllno".$_SESSION['RollNo'];

//remove value
unset($_SESSION['username']);

if(!isset($_SESSION['username'])){
  echo "'username' has been removed from the session.<br>";
}

session_unset();
session_destroy();
?>