<?php 

$x_won = $table[0][0] == 'x' && $table[1][1] == $table[2][2] && $table[0][0] == $table[2][2];
$o_won = $table[0][0] == 'o' && $table[1][1] == $table[2][2] && $table[0][0] == $table[2][2];

if ($x_won) {
	$heading = 'X won the game';
} else if($o_won){
	$heading = 'O won the game';
}