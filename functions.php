<?php

# user defined functions
// function addition() {
// 	$a = 3;
// 	$b = 4;

// 	echo $a + $b;
// }

// addition();

# function arguments
// $a = 3;
// $b = 4;

// function addition($first, $second) {
// 	echo $first + $second;
// }

// addition($a, $b);
// echo "<br>";
// addition(6, 9);

## default function argument

// function sum($first_number = 3, $second_number = 4) {
// 	echo $first_number + $second_number;
// }

// sum(); // echo 7
// sum(5); // echo 9
// sum( , 5); // causes parse error
// sum(5, 6); // echo 11

# variable's scope
/*
Variable scope — and, in particular, local scope — make your code easier to manage. If all your variables are global, they can be read and changed from anywhere in your script. This can cause chaos in large scripts as many different parts of the script attempt to work with the same variable. By restricting a variable to local scope, you limit the amount of code that can access that variable, making your code more robust, more modular, and easier to debug.
 */
// $a = 3;
// $b = 4;

// function addition() {
// 	global $a, $b;

// 	echo $a + $b;
// }

// addition();

//global scope
// $a = 3;
// $b = 4;

// function addition() {
// 	//local scope
// 	echo $GLOBALS['a'] + $GLOBALS['b'];
// }

// addition();

# arguments by reference

// $myVar = 'Hello world';
// $anotherVar = $myVar; // myVar is 'Hello world!'
// $anotherVar = 'Hey there!'; // 'Hello world!' is replaced by 'Hey there!'

// $thirdVar = "Third";
// $myVar = 'Hello world';
// $anotherVar = &$myVar; //
// $anotherVar = &$thirdVar; //
// $anotherVar = 'Hey there!'; //
// $anotherVar = "Changed";

// echo $myVar . '<br>';
// echo $anotherVar . '<br>';
// echo $thirdVar . '<br>';

// function multiplyItself(&$numbers) {
// 	for ($i = 0; $i < count($numbers); $i++) {
// 		$numbers[$i] = $numbers[$i] * $numbers[$i];
// 	}
// 	print_r($numbers);
// }

// $numbers = [2, 3, 4];
// print_r($numbers);

// echo "<br>";

// multiplyItself($numbers);

// echo "<br>";

// print_r($numbers);

# returning values
// function sum($frst, $scnd) {
// 	echo "Something with $frst and $scnd<br>";
// 	return $frst + $scnd;
// 	echo "<br>Another thing";
// }

// echo "before function<br>";
// var_dump(sum(4, 5));
// echo "<br>after function";

# function to get the sum of two numbers
// function sumOfTwoNumbers($firstNumber, $secondNumber) {
// 	$sum = 0;
// 	$sum = $firstNumber + $secondNumber;
// 	return $sum;
// }

// function sumOfTwoNumbersWithDefaultArguments($firstNumber = 0, $secondNumber = 0) {
// 	return $firstNumber + $secondNumber;
// }

// // echo "<br>";
// // var_dump(sumOfTwoNumbers()); // will cause the problem

// echo "<br>";
// var_dump(sumOfTwoNumbersWithDefaultArguments());

// echo "<br>";
// var_dump(sumOfTwoNumbers(4, 5));

// echo "<br>";
// echo sumOfTwoNumbers(6, 7);

// $sum = sumOfTwoNumbers(8, 9);
// echo "<br>";
// print "$sum";

# function to get the sum of all numbers
// function sumOfArray($numbers = []) {
// 	// defining variables
// 	$sum = 0;

// 	// traversing array and adding element to $sum
// 	foreach ($numbers as $number) {
// 		$sum += $number;
// 	}

// 	// returning the $sum
// 	return $sum;
// }

// echo sumOfArray();
// echo "<br>";
// echo sumOfArray([1, 6, 9, 10]);

// echo "<br>";
// $arr = [123, 345, 123];
// echo sumOfArray($arr);

# arrow functions
// $sumOfTwo = fn($a, $b) => $a + $b;

// echo $sumOfTwo(5, 6);
