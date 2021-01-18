<?php

class Fruit{
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    function set_name($name){
        $this->name = $name;
    }
}

//$banana = new Fruit();
////$banana->name = 'banana';
//$banana->set_name('banana');
//var_dump($banana->name);

$banana = new Fruit("banana", "yellow");
var_dump($banana);
var_dump($banana->color);
