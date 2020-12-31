<?php
//readfile - reads a file and writes it to the output buffer.
//readfile('webdictionary.txt');

//fopen() - open file for future manipulation
$filename = 'webdictionary.txt';

## Reading fullfile

$webdictfile = fopen($filename, 'r');
$webdictcontent = fread($webdictfile, filesize($filename));

// retrieving backend techs
$exploded = explode(',', $webdictcontent);

// $html_content = nl2br($webdictcontent);
// echo $html_content;
fclose($webdictfile);

// $lines = explode(',', $html_content);
// $pairs = array_map(function ($el) {return explode(' = ', $el);}, $lines);
// echo "<pre>";
// var_dump($lines);
// var_dump($pairs);
// echo "</pre>";

## Reading partially

// $webdictfile = fopen($filename, 'r');

// // get string
// echo fgets($webdictfile)."<br>";
// echo fgets($webdictfile)."<br>";
// echo fgets($webdictfile)."<br>";

// // get character
// echo fgetc($webdictfile)."<br>";
// echo fgetc($webdictfile)."<br>";
// echo fgetc($webdictfile)."<br>";

// fclose($webdictfile);

## Write into files

$filename = 'backenddict.txt';

$backenddict = fopen($filename, 'w');

$backend_content = $exploded[3] . $exploded[4];

fwrite($backenddict, $backend_content);
// echo "<pre>";
// var_dump($exploded);
// var_dump($backend_content);
// echo "<pre>";

fclose($backenddict);





?>