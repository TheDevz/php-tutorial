<?php
include 'namespace.php';

//class Car {
//    public $year = "2019";// Car property
//
//    function startEngine(){// Car method
////        activateElectronics();
////        takeFuel();
////        fireFuel();
////        useOil();
//        echo "Starting engine...";
//    }
//}
//
////single level inheritance
//class BMWCar/*child class*/ extends Car/*parent class*/ {
//    /* override function */
//    function startEngine(){
//        echo "Starting BMW engine...";
//    }
//}
//
//class Wheel {
//    public $condition = "New";
//}


//$car = new Car();// declaration of an instance of Car
//$bmw = new BMWCar(/*$name='BMW', $wheels=4, $year=2019, $position=2*/);// declaring an instance(object) of Car
//$mercedes = new Car();// instance declaring an instance of Car
//
//echo $car->year . PHP_EOL;
//$car->startEngine();
//
//echo PHP_EOL;
//
////starting BMW engine
//echo $bmw->year . PHP_EOL;
//$bmw->startEngine();



//class Shape{
//    function draw(){}
//}
//
////single level inheritance
//class Square extends Shape{
//    public $width = 4;
//    public $height = 4;
//
//    function draw()
//    {
//        echo "Drawing $this->height x $this->width square...";
//    }
//}
//
////multilevel inheritance
//class Rectangle extends Square {
//    public $width = 4;
//    public $height = 6;
//}
//
//class Triangle extends Shape{
//    function draw()
//    {
//        echo "Drawing triangle...";
//    }
//}
//
//class Circle extends Shape{
//    function draw()
//    {
//        echo "Drawing circle...";
//    }
//}
//
//$square = new Square();
//$rectangle = new Rectangle();
//
//$rectangle->height = 9;
//$rectangle->draw();
//$square->draw();
//
//var_dump($rectangle instanceof Shape);


$table_example = new Html\Table();
$table_example->title = 'Test';
$table_example->numRows = 4;
$table_example->message();

$table_example = new Html\Image();
$table_example->title = 'Test';
$table_example->href = 'image.com/123asd.jpg';
$table_example->message();