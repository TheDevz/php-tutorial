<?php
$string = file_get_contents('./users.json');
$json_a = json_decode($string, true);
var_dump($json_a); 
