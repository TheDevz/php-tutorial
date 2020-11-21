<?php

## Create(declaration and definition) an array
// declaration is creation: array() or []
$arr_1way_declaration = array('Cat', 'Dog');
$arr_1way_definition = array(
	0 => 'Cat', 1 => 'Dog',
);

//							  0		 1
// $arr_2way_declaration = ['Cat', 'Dog'];
// $arr_2way_definition = [
// 	0 => 'Cat', 1 => 'Dog',
// ];

// var_dump($arr_1way_declaration === $arr_2way_definition);

## Print the whole array
// print_r($arr_1way_definition);

// foreach ($arr_1way_definition as $key => $value) {
// 	echo "$key. $value <br>";
// }

// var_dump($arr_1way_definition);

// for ($i = 0; $i < count($arr_1way_definition); $i++) {
// 	echo "$i. " . $arr_1way_definition[$i] . "<br>";
// }

## Get element by index
// echo $arr_1way_definition[0];

## Set element by index
$animals = ['Lion', 'Cat', 'Dog'];
var_dump($animals);

echo "<br>";

$animals[2] = "Puma";
var_dump($animals);

echo "<br>";

$animals[3] = "Leopard";
var_dump($animals);

## Check if an array has element at index 2
echo "<br>Is \$animals[4] exists? Answer: ";
// var_dump(isset($animals[4]));
var_dump(array_key_exists(4, $animals));

## Append element
echo "<br>";

$animals[] = 'Dog';
var_dump($animals);

echo "<br>";

## Print the length of the array

echo "<br>We have " . count($animals) . " animals in the zoo";

## Add the element at the end of an array
$girr = "Girraffe";
array_push($animals, $girr);
var_dump($animals);

## Remove the element from the end of an array
echo "<br>";
array_pop($animals);
var_dump($animals);

## Add the element at the beginning of an array(array_unshift)
echo "<br>";
array_unshift($animals, 'Horse', 'Goat', 'Cow');
var_dump($animals);

## Remove the element from the beginning of an array(array_shift)
echo "<br>";
array_shift($animals);
var_dump($animals);

## Split the string into an array(explode)
//									0		1	  2		 3
$pizza_order_ingredients_input = "Tomato, onion, meat, mushrooms";
$ingredients = explode(', ', $pizza_order_ingredients_input);
echo "<br>";
var_dump($ingredients);

## Combine array elements into a string(implode)
echo "<br>";
$string_animals = implode(', ', $animals);
var_dump($string_animals);

## Check if an element exists within the array(in_array)
echo "<br>Is 'Horse' in the array? Answer: ";
var_dump(in_array('Horse', $animals));

## Search element index in the array(array_search)
echo "<br>Find me the 'Cat'. Its index is ";
var_dump(array_search('Cat', $animals));

## Merge two arrays(array_merge)
echo "<br>";
$merging_arrays_1way = array_merge($animals, $ingredients);
var_dump($merging_arrays_1way);

echo "<br>";
$merging_arrays_2way = [...$animals, ...$ingredients];
var_dump($merging_arrays_2way);

## Sorting of an array(Reverse order also)
// alphabet simple sort
echo "<br>";
sort($animals);
var_dump($animals);

// alphabet reverse sort
echo "<br>";
rsort($animals);
var_dump($animals);

// key reverse sort
echo "<br>";
krsort($animals);
var_dump($animals);

## Filter, reduce, map of an array
function multiply_on_itself($array_element) {
	return $array_element * $array_element;
}

/* http://php.net/manual/en/ref.array.php */

# Associative arrays

// create an associative array

// get element by key

// set element by key

// check if array has specific key

// print the keys of an array

// print the values of an array

// sorting associative arrays by values, by keys

# Two dimensional arrays

/*------------------------------------------------------------*/

# Array is collection of different data elements(... types)
# $arr = [1, 2.4, true, 'Asia', 'a', ['a', 'b', 'c']];
# echo $arr[1];

// declaration
// $car_names = array();
// $car_names = [];

// definition
// $arr = []
// $car_names = array('Mercedes', 'BMW', 'Audi');

// 					0			1		2    // index = position - 1;
// $car_names = ['Mercedes', 'BMW', 'Audi'];

// echo $car_names[2];

## Array Operators
/* + (Union) */

/*
$a = [0, 1, 2, 3];
$b = [0, 1, 2, 3, 4, 5, 6];

$u = $a + $b === [0, 1, 2, 3, 4, 5, 6];
 */

// $garage1 = ['Mercedes', 'BMW']; //[0]=> string(8) "Mercedes" [1]=> string(3) "BMW"
// $garage2 = ['Mercedes', 'BMW', 'Audi']; //[0]=> string(8) "Mercedes" [1]=> string(3) "BMW" [2]=> string(4) "Audi"
// var_dump($garage1 + $garage2);

// $germanCars = ['1' => 'Mercedes', '2' => 'BMW'];
// $uzbekCars = ['3' => 'Chevrolet', '4' => 'Ravon'];

// $cars = $germanCars + $uzbekCars;
// var_dump($cars);

/* == (Equality) */
// $a = ['german' => 'Mercedes', 'us' => 'Chevrolet', 'count' => 2];
// $b = ['us' => 'Chevrolet', 'german' => 'Mercedes', 'count' => '2'];

// echo "\$a = ";
// var_dump($a);
// echo "<br>";
// echo "\$b = ";
// var_dump($b);

// echo "<br><br>\$a == \$b is ";
// var_dump($a == $b);

/* === (Identity) */
// $a = ['germanBrandsCount' => '3', 'usBrandsCount' => '50'];
// $b = ['germanBrandsCount' => '3', 'usBrandsCount' => '50'];

// echo "\$a = ";
// var_dump($a);
// echo "<br>";
// echo "\$b = ";
// var_dump($b);

// echo "<br><br>\$a === \$b is ";
// var_dump($a === $b);

/* != (Inequality) */
// $a = ['german' => 'Mercedes', 'count' => 2, 'us' => 'Chevrolet'];
// $b = ['us' => 'Chevrolet', 'german' => 'Mercedes-Benz', 'count' => '2'];

// echo "\$a = ";
// var_dump($a);
// echo "<br>";
// echo "\$b = ";
// var_dump($b);

// echo "<br><br>\$a != \$b is ";
// var_dump($a != $b);

/* <> (Inequality) */
// $a = ['german' => 'Mercedes', 'count' => 2, 'us' => 'Chevrolet'];
// $b = ['us' => 'Chevrolet', 'german' => 'Mercedes-Benz', 'count' => '2'];

// echo "\$a = ";
// var_dump($a);
// echo "<br>";
// echo "\$b = ";
// var_dump($b);

// echo "<br><br>\$a <> \$b is ";
// var_dump($a <> $b);

/* !== (Non-Identity) */
// $a = ['germanBrandsCount' => '3', 'usBrandsCount' => '50'];
// $b = ['germanBrandsCount' => '3', 'usBrandsCount' => 50];

// echo "\$a = ";
// var_dump($a);
// echo "<br>";
// echo "\$b = ";
// var_dump($b);

// echo "<br><br>\$a !== \$b is ";
// var_dump($a !== $b);

/*

 */