<?php

class Fruit{
    public $name;
    protected $color;
    private $weight;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    /*public*/ function set_name($name){
        $this->name = $name;
    }

    /** Setter function for weight property
     * @param int $weight - Weight of a fruit
     * @return void
     */
    function set_weight(int $weight)
    {
        $this->weight = $weight;
    }

    /** Get weight value of the object*/
    function get_weight(){
        return $this->weight;
    }

    function get_color(){
        return $this->color;
    }
}

class Apple extends Fruit{

    public function __construct()
    {
        parent::__construct('Apple', 'Green');
    }

    function get_property($propertyName){
        return $this->{$propertyName};
    }
}

//$banana = new Fruit();
////$banana->name = 'banana';
//$banana->set_name('banana');
//var_dump($banana->name);

//$banana = new Fruit("banana", "yellow");

//$banana->color = 'red';// throws an error
//$banana->weight = '1KG';// throws an error
//var_dump($banana->color);// throws an error
//var_dump($banana->weight);// throws an error

//var_dump($banana);
//var_dump($banana->get_color());// returns color value
//$banana->set_weight(4);
//var_dump($banana->get_weight());

$apple = new Apple();
echo $apple->name . PHP_EOL;
//echo $apple->color; // throws an error
//echo $apple->weight;

echo $apple->get_property('color') . PHP_EOL;
//echo $apple->get_property('weight'); // throws an error
//echo $apple->get_weight(); // throws an error
