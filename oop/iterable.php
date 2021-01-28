<?php

//function printIterable(iterable $myIterable)
//{
//    foreach ($myIterable as $item) {
//        echo $item;
//    }
//}
//
//$arr = ["a", "b", "c"];
//printIterable($arr);
////printIterable('$arr');// string is not iterable, therefore will cause the problem
// Create an Iterator
class MyIterator implements Iterator {
    private $items = [];
    private $pointer = 0;

    public function __construct($items) {
        // array_values() makes sure that the keys are numbers
        $this->items = array_values($items);
    }

    public function current() {
        return $this->items[$this->pointer];
    }

    public function key() {
        return $this->pointer;
    }

    public function next() {
        $this->pointer++;
    }

    public function rewind() {
        $this->pointer = 0;
    }

    public function valid() {
        // count() indicates how many items are in the list
        return $this->pointer < count($this->items);
    }
}

// A function that uses iterables
function printIterable(iterable $myIterable) {
    foreach($myIterable as $item/*...current()*/) {
        echo $item;
    }
}

// Use the iterator as an iterable
//$iterator = new MyIterator(["a", "b", "c"]);
//printIterable($iterator);

class Car{
    public $brand = 'Car';
    public $year;
}

//$cars = [ new Car(),new Car(),new Car(),new Car(),new Car(),];

class CarIterable implements Iterator{
    private $items=[];
    private $pointer=0;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function current()
    {
        return $this->items[$this->pointer]->brand;
    }

    public function next()
    {
        $this->pointer++;
    }

    public function key()
    {
        return $this->pointer;
    }

    public function valid()
    {
        return $this->pointer < count($this->items);
    }

    public function rewind()
    {
        $this->pointer = 0;
    }
}

$cars = [new Car(), new Car(), new Car(), new Car(), new Car()];
$cars_iterator = new CarIterable($cars);

foreach ($cars_iterator as $car){
    echo $car;
}

interface CarInterface {
    public function startEngine();
}

class Audi implements CarInterface{
    public function startEngine()
    {

    }
}