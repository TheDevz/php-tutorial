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

// variable's scope
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

function multiplyItself($arr) {
	for ($i = 0; $i < count($arr); $i++) {
		$arr[$i] = $arr[$i] * $arr[$i];
	}
	print_r($arr);
}

$numbers = [2, 3, 4];
print_r($numbers);

echo "<br>";

multiplyItself($numbers);

echo "<br>";

print_r($numbers);

# returning values

# function to get the sum of two numbers

# function to get the sum of all numbers

# arrow functions
