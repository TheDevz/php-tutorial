<?php

class Fruit{
    public $name;

    function __construct($name){
        $this->name = $name;
    }

    function set_name($name){
        $this->name = $name;
    }

    function __destruct(){// used when script execution is ended or stopped, or when destructuring happens
        echo "Bye! {$this->name} leaves the script.(";
    }
}

class File {
    public function __construct()
    {
        // open
    }

    public function insertData($data)
    {
        // insert given
    }

    public function __destruct()
    {
        // close
    }
}

//$banana = new Fruit();
////$banana->name = 'banana';
//$banana->set_name('banana');

$banana = new Fruit('banana');
$apple = new Fruit('apple');
var_dump($banana->name);
