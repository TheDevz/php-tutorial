<?php
///** Inheriting the properties and methods of the parent class*/
//
//class Vitamin {
//    public $name;
//
//    public function __construct($name)
//    {
//        $this->name = $name;
//    }
//}
//
//class Fruit {
//    public $name;
//    public $color;
//    public $vitamins;
//
//    public function __construct($name, $color, $vitamins=[])
//    {
//        $this->name = $name;
//        $this->color = $color;
//        $this->vitamins = $vitamins;
//    }
//
//    public function about()
//    {
//        echo "I'm fruit";
//    }
//}
//
//class Apple extends Fruit{
//
//    public function __construct($color, $vitamins = [])
//    {
//        parent::__construct('Apple', $color, $vitamins);
//    }
//
//    public function about()
//    {
//        echo "An apple is an edible fruit produced by an apple tree. Apple trees are cultivated worldwide and are the most widely grown species in the genus Malus. ";
//    }
//}
//
//class Orange extends Fruit{
//    public $name;
//    public $vitamin;
//
//    public function __construct($color, $vitamins = [])
//    {
//        $this->name = 'Orange';
//        $this->color = $color;
//        $this->vitamins = $vitamins;
//    }
//}
//
//$vitamin_a = new Vitamin('A');
//$vitamin_c = new Vitamin('C');
//
//$vitamins = [$vitamin_a, $vitamin_c];
//
//$yellow_apple = new Apple('yellow', $vitamins);
//
//$yellow_apple->about();
////echo $yellow_apple->name . PHP_EOL;
////echo $yellow_apple->color . PHP_EOL;
////foreach ($yellow_apple->vitamins as $vitamin){
////    echo $vitamin->name . PHP_EOL;
////}
//
////$orange = new Orange('orange', $vitamins);
////var_dump($orange);
///

/** PPT*/
//class Fruit
//{
//    public $name;
//    public $color;
//
//    public function __construct($name, $color)
//    {
//        $this->name = $name;
//        $this->color = $color;
//    }
//
//    public function intro()
//    {
//        echo "The fruit is {$this->name} and the color is {$this->color}.";
//    }
//}
//
//// Strawberry is inherited from Fruit
//class Strawberry extends Fruit
//{
//    public function message()
//    {
//        echo "Am I a fruit or a berry? ";
//    }
//}
//
//$strawberry = new Strawberry("Strawberry", "red");
//$strawberry->message();
//$strawberry->intro();

/** inheritance: protected*/
class Fruit
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    protected function intro()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

class Strawberry extends Fruit
{
    public function message()
    {
        echo "Am I a fruit or a berry? ";
    }

    public function intro()
    {
        echo "The garden strawberry is a widely grown hybrid species of the genus Fragaria, collectively known as the strawberries, which are cultivated worldwide for their fruit. The fruit is widely appreciated for its characteristic aroma, bright red color, juicy texture, and sweetness.";
    }
}


// Try to call all three methods from outside class
$strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
$strawberry->message(); // OK. message() is public
$strawberry->intro(); // ERROR. intro() is protected

