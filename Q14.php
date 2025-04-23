<?php

class Person{
	
	public function __construct($name,$age)	
		{
			$this->name=$name;
			$this->age=$age;
	
		}


		public function info(){
	echo "My name is $this->name and I am  $this->age year old.";
}
}
$p=new Person("Raju",25);
$p->info();
?>