<?php

# Data Types

// integers(numbers)
// $a = 12; //1234, 10000, 8398475;

// float(double)
// $b = 12.04; //32.12, 54.0001;

// booleans(true/false)(TRUE/FALSE)

// $temperature = -1;//celsius
// $weatherIsCold = $temperature < 0;
// if ($weatherIsCold) {
//   echo "Please wear jacket";
// } else {
//   echo "Weather is not cold";
// }

// string

// $characters = 'a' . 'b' . 'c';//characters
// $string = 'abcd';
// for ($i=0; $i < strlen($string); $i++) {
//   echo $string[$i] . '<br>';
// }
// echo $string;

// array

// $cars = array(); //declaration
// $cars = [] //declaration both are same
// $car_names = ['Mercedes', 'BMW', 'Toyota'];
// foreach ($car_names as $car_name) {
//   echo $car_name . '<br>';
// }

// objects

// class HTMLDocument{// class(object)

//   public $URL = "http://localhost/tutorial/index.php";// class/object property

//   public function getURL(){
//     return $this->URL;
//   }// class/object method
// }

// $document = new HTMLDocument();
// echo $document->getURL();

# Variables

/* Constants */
// const PI = 3.14;
// echo PI;
// echo '<br>';
// define('PI_NUMBER', 3.14);
// echo PI_NUMBER;

// $startsWithDollarSign = "text";// $
// $a = 3;
// $_variable_name = 3;
// $_SERVER;
// $_POST;
// $2a = 3; //gives error
// a = 3; //gives error
// $a-b = 3; // gives error

// echo $startsWithDollarSign;
// echo "<br>";
// echo $a;
//
// $x = 5;
// $y = array("x" => "Hello");
// echo "<br>";
// print $y[x];

// Strings
// $someString1 = "double quotation";
// $someString2 = 'single quotation';

# Concatenation(adding string to each other)

// echo $someString1;
// echo "<br>" . '<br>';
// echo $someString2;

// echo "<br>Weather " . "is cool";

// $someString3 = 'i\'m Abubakr';
// echo $someString3;

// $someString4 = "this is \"AliExpress\"";
// echo $someString4;

// $singleWithinDouble = "this is 'AliBaba'";
// $doubleWithinSingle = 'this is "AliBaba"';
// echo $singleWithinDouble . '<br>';
// echo $doubleWithinSingle . '<br>';

# Comment with hash

/*
	  Multi
	  Line
	  Comment
*/

#Multi line string representation

// print <<<END
// Multi<br>
// line
// string
// printing
// END;

// print "
// <br>Multi<br>
// line
// string
// printing
// with double quotation
// ";

#Case sensitivity

// $profit = 34;
// echo '<br>';
// print("Variable profit is $profit<br>");
// print("Variable PrOfiT is $PrOfiT<br>");

# if blocks

// if (7 === 5 + 3)
//   echo "7 is equal to 4 added by 3";
// else
//   echo "7 is not equal to 4 added by 3";

// if (7 === 5 + 3) {
//   echo "7 is equal to";
//   echo " 4 added
//   echo " by 3";
// } else {
//   echo "7 is not equal to 4 added by 3";
// }

# Declaration and definition of the variables

// $a;//booking the place from the memory under 'a'(naming)
// $a = 5;
// echo $a;
