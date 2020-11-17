<?php
echo "<h1>Numbers</h1><br>";

# Declaring numbers
$a = 4.0;
$b = 1;

echo "\$a = $a" . "<br>";
echo "\$b = $b" . "<br>";

# Arithmetic operators
// echo "$a + $b = " . $a + $b . "<br>";
// echo "$a - $b = " . $a - $b . "<br>";
// echo "$a * $b = " . $a * $b . "<br>";
// echo "$a / $b = " . $a / $b . "<br>";
// echo "$a % $b = " . $a % $b . "<br>";

# Assignment with math operators
// echo "$a += $b" . $a += $b . "<br>";
// echo "$a -= $b" . $a -= $b . "<br>";
// echo "$a *= $b" . $a *= $b . "<br>";
// echo "$a /= $b" . $a /= $b . "<br>";
// echo "$a %= $b" . $a %= $b . "<br>";

# Number checking operators
// integer
echo "<pre>";
echo "is_integer(\$b) && is_int(\$b) && is_long(\$b) is "; // is_int(); // is_long(); # are the same
var_dump(is_integer($b));
echo "</pre>";

echo "<br>";

// float
echo "<pre>";
echo "is_float(\$a) && is_double(\$a) is "; // is_double(\$a); # is the same
var_dump(is_float($a));
echo "</pre>";

// infinite & finite
echo "<pre>";
echo "is_infinite(\$a) is ";
var_dump(is_infinite($a));

echo "<br>";

echo "is_finite(\$a) is ";
var_dump(is_finite($a));
echo "</pre>";

echo "<pre>";
echo "MAXIMUM PHP available number is ";
var_dump(PHP_FLOAT_MAX);
echo "</pre>";

// NaN(Not a number)
echo "<pre>";
echo "<br>";
echo "is_nan(\$a) is ";
var_dump(is_nan($a));
echo "</pre>";

// Numeric
echo "<pre>";
echo "<br>";
echo "is_numeric(\"a12343\") is ";
var_dump(is_numeric("a12343"));
echo "</pre>";

# PHP Casting Strings and Floats to Integers

// Cast float to int
$x = 23465.768;
$int_cast = (int) $x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int) $x;
echo $int_cast;

// Cast string to float
$x = "23465.768";
$int_cast = (float) $x;
echo $int_cast;

# Increment/Decrement operators

# Number checking operators

# Conversion

# Number functions

# Formatting numbers

// https://php.net/manual/en/ref.math.php