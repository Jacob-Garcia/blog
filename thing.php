<?php

class Alaskan{
     
     public $igloos = "";
     public $weapon;
     public $dog;

	function__construct($igloo, $weapon, $dog)
    {
      $this->igloo = $igloo;
      $this->weapon = $weapon;
      $this->dog = $dog;
    }

    function hunt(){
            return "I'm an Alaskan, I have many" . $this->$igloo . " " . "I am myself a UFC" . $this->weapon . " and I have a" . $this->dog . ".";
    }
}
    $donaji = new Alaskan(7, "spear", "Husky");
    echo $donaji->hunt();
    echo "<br>";
    echo $donaji->dog;
?>