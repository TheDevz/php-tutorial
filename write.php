<?php
$json_a = json_decode(file_get_contents('./users.json'), true);
$json_a[0]['password'] = 'testpass';
$file = fopen('./users.json', 'w');
fwrite($file, json_encode($json_a));
fclose($file);
