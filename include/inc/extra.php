<?php

function redirect($url) {
	header("Location: $url");
}

function print_arr_elements($array) {
	foreach ($array as $key => $value) {
		echo $key . '. ' . $value . '<br>';
	}
}