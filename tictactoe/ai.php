<?php 

$i = 0;
while (true) {
	$ai_move_rkey = rand(0, 2);
	$ai_move_ckey = rand(0, 2);
	
	$ai_move_column_value = &$table[$ai_move_rkey][$ai_move_ckey];
	
	if(empty($ai_move_column_value)){
		$ai_move_column_value = 'o';
		break;
	}

	$i++;
	if ($i > 9) {
		$heading = "Game over";
		break;
	}
}
 ?>