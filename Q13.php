<?php

class Php{
	public $name;

	
	public function __construct($name){
	
		$this->name=$name;

		}
		
	public function speak(){
		
		echo"$this->make a sound ";
}
}
class sub extends Php{
public function speak(){
	echo "$this->name braks";
}
}

$sub = new sub("Buddy");
$sub->speak();

?>