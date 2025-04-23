<?php

class User {
public $name;
public $age;

public function __construct($name,$age){
$this->name=$name;
$this->age=$age;
}

public function drive(){
echo "$this->name $this->age";
}
}

$use=new User("Raju",25);

echo "Class Name".get_class($use);

echo "Methods";

print_r(get_class_methods($use));
?>