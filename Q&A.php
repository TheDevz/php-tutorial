<?php
## ARRAYS
//1st way
$sum = 0;
$numbers = array(0, 1, 2, 3, 4, 5, 6);
foreach ($numbers as $key => $number) {
	$sum += $number;
}						   O
echo "Sum is " . $sum . " /||\ ";
//2nd way
echo array_sum($numbers);

// $table = [
// 	//1	   2    3    4    5    6    7    8    9   10
// 	['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j'], // grey first row of the table
// 	['j', 'i', 'h', 'g', 'f', 'e', 'd', 'c', 'b', 'a'], // red
// ]; //yellow second row of the table

// // getting the value of dimensional array
// echo "First row of the table ";
// var_dump($table[0]); // first row(counting starts from zero)
// echo "<br>";
// echo "1st element of first row of the table is ";
// var_dump($table[0][0]); // first row's first element(counting starts from zero)

// // changing value of the dimensional array
// echo "<br>";
// $table[0][0] = 'z';
// echo "Changing 1st element of first row of the table. Now row looks like ";
// var_dump($table[0]); // first row's first element(counting starts from zero)

// // adding new row
// echo "<br>";
// $table[] = ['z', 'y', 'x', 'v', 'w'];
// echo "Added new row. Now table looks like ";
// print_r($table); // first row's first element(counting starts from zero)
// echo "<br>";
// echo "Array's elements count is " . count($table);

// // add new elements to row
// echo "<br>";
// $table[2][] = 's';
// echo "Added new element 's' to last row. Now table looks like ";
// print_r($table); // first row's first element(counting starts from zero)
// echo "<br>";
// echo "Array's elements count is " . count($table);

// $transactions = array(
// 	array(
// 		"debit" => 2,
// 		"credit" => 3,
// 	),
// 	array(
// 		"debit" => 15,
// 		"credit" => 14,
// 	),
// );

// $transactions_with_amount = [];
// foreach ($transactions as $i => $transaction) {
// 	$transactions_with_amount[$i]['debit'] = $transaction['debit'];
// 	$transactions_with_amount[$i]['credit'] = $transaction['credit'];
// 	$transactions_with_amount[$i]['amount'] = abs($transaction['debit'] - $transaction['credit']);
// }

// var_dump($transactions_with_amount);