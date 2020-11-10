<?php
# Operators

## Arithmetical operators
echo "Arithmetical operators<br>";
$x = 5;
$y = 6;

// addition
echo "$x - $y = " . ($x + $y) . '<br>';

// substraction
echo "$x - $y = " . ($x - $y) . '<br>';

// multiplication
echo "$x * $y = " . ($x * $y) . '<br>';

// division
echo "$x / $y = " . ($x / $y) . '<br>';

// modulus(remainder)
echo "$y % $x = " . ($y % $x) . '<br>';
echo "5 % 2 = " . (5 % 2) . '<br>';
echo "6 % 2 = " . (6 % 2) . '<br>';
echo "14 % 5 = " . (14 % 5) . '<br>';
// 6 / 5 = 1.2 # (1 + 0.2) # 1 = 5 / 5 # 0.2 = 1 / 5
// 10 / 5 = 2 remainder is 0
// 6 / 5 = 1 remainder is 1
// (5 + 1) / 5 = 5/5 + 1/5  remainder is 1

// exponentation
echo "2 ** 3 = " . (2 ** 3) . '<br>'; // 2 * 2 * 2 = 8

## Assignment operators
echo "<br>Assignment operators<br>";
$a = 3;
$b = 2;

// addition
echo "$a += $b === " . ($a += $b) . '<br>'; // $a = $a + $b; # $a = 3 + 2; # $a = 5;
// $a = $a + 1;
// $a += 1;

// substraction
$c = 3;
$d = 2;
echo "$c -= $d === " . ($c -= $d) . '<br>'; // $c = $c - $d; # $c = 3 - 2; # $c = 1;

// multiplication
$e = 3;
$f = 2;
echo "$e *= $f === " . ($e *= $f) . '<br>'; // $e = $e * $f; # $e = 3 * 2; # $e = 6;
echo "$f *= $e === " . ($f *= $e) . '<br>'; // $f = $f * $e; # $f = 2 * 6; # $f = 12;

// division
$e = 3;
$f = 2;
echo "$e /= $f === " . ($e /= $f) . '<br>'; // $e = $e / $f; # $e = 3 / 2; # $e = 1.5;
echo "$f /= $e === " . ($f /= $e) . '<br>'; // $f = $f / $e; # $f = 2 / 6; # $f = 1.(3);

// division
$e = 3;
$f = 2;
echo "$e %= $f === " . ($e %= $f) . '<br>'; // $e = $e % $f; # $e = 3 % 2; # $e = 1;
echo "$f %= $e === " . ($f %= $e) . '<br>'; // $f = $f % $e; # $f = 2 % 6; # $f = 0;

## Assignment operators
echo "<br>Comparison operators<br>";
$h = 3;
$k = '3';

// equal(==)
echo "Equal(==): $h == $k is ";
var_dump(($h == $k));
echo "<br>";

// identical(===)
// var_dump($h);
// var_dump($k);
echo "Identical(===): $h === $k is ";
var_dump(($h === $k));
echo "<br>";

// not equal(!=)
echo "Not equal(!=): $h != $k is ";
var_dump(($h != $k));
echo "<br>";

// not equal(<>)
echo "Not equal(<>): $h <> $k is ";
var_dump(($h != $k));
echo "<br>";

// not identical(!==)
echo "Not identical(!==): $h !== $k is ";
var_dump(($h !== $k));
echo "<br>";

// greater than(>)
echo "greater than(>): $h > $k is ";
var_dump(($h > $k));
echo "<br>";

// less than(<)
echo "less than(<): $h < $k is ";
var_dump(($h < $k));
echo "<br>";

// greater than or equal(>=)
echo "greater than or equal(>=): $h >= $k is ";
var_dump(($h >= $k));
echo "<br>";

// less than or equal(<=)
echo "less than or equal(<=): $h <= $k is ";
var_dump(($h <= $k));
echo "<br>";

// Spaceship(<=>)
echo "Spaceship(<=>): $h <=> $k is ";
var_dump(($h <=> $k));
echo "<br>";

## Increment/Decrement operators
echo "<br>Increment/Decrement operators<br>";
$j = 3;
echo 'j++ is ' . $j++; // 3 // $j = $j + 1;
echo '<br> now j is ' . $j; // 4

echo '












';
