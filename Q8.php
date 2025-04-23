<?php
$student = array(

	"name"=>"raju",
	"age"=>20,	
	"Dept"=>"CO",
	"Fees"=>66000		
		);

echo "Student Name : ".$student['name']."<br>";
echo "Student Age : ".$student['age']."<br>";
echo "Student Department : ".$student['Dept']."<br>";
echo "Student Fees : ".$student['Fees']."<br>";


//adding value

$student['year']=3;

echo "Stuent Year".$student['year']."<br>";

echo "<br>Student Details:<br>";
foreach ($student as $key => $value) {
    echo "$key: $value<br>";
}


?>