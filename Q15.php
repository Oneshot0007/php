<?php

class School {
    public $name;

    public function hi($msg) {
        return $msg . " " . $this->name;
    }
}

$s = new School();
$s->name = "Rjau"; 
echo $s->hi("Welcome");

?>
