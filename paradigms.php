<?php

// procedural paradigm
$a = 4;
$b = 3;
$c = 8;
$d = 7;

$sum = $a + $b;
$mult = $a * $b;
$mult1 = $c * $d;
echo $sum;

echo "<br>";

// functional
function sumOf2Vars($a, $b) {
	return $a + $b;
}

function multiplication() {
	// instructions are here
}

function substraction() {

}

/* ... */

function cAlCuLaTe($sign, $a, $b) {
	if ($sign === '*') {
		return $a * $b;
	}

	if ($sign === '+') {
		return $a + $b;
	}
}
echo "<hr>";
echo CaLcUlAte('*', $a, $b);
echo "<br>";
echo CALCULATE('+', $c, $d);
echo "<br>";
echo calculate('*', $c, $d);
echo "<hr>";

$sum = sumOf2Vars($a, $b);
echo $sum;

echo "<br>";

// object oriented programming
class Calculator {
	public $a;
	public $b;

	public function sum() {
		return $this->a + $this->b;
	}

}

$calc = new Calculator();
$calc->a = 3;
$calc->b = 4;
echo $calc->sum();
