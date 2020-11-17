<?php

## Create an array

## Print the whole array

## Get element by index

## Set element by index

## Check if an array has element at index 2

## Append element

## Print the length of the array

## Add the element at the end of an array

## Remove the element from the end of an array

## Add the element at the beginning of an array

## Remove the element from the beginning of an array

## Split the string into an array

## Combine array elements into a string

## Check if an element exists within the array

## Search element index in the array

## Merge two arrays

## Sorting of an array(Reverse order also)

## Filter, reduce, map of an array

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