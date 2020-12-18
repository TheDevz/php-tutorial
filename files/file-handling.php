<?php
//readfile - reads a file and writes it to the output buffer.
//readfile('webdictionary.txt');

//fopen() - open file for future manipulation
$filename = 'webdictionary.txt';

// $webdictfile = fopen($filename, 'r');
// $webdictcontent = fread($webdictfile, filesize($filename));
// $html_content = nl2br($webdictcontent);
// echo $html_content;
// fclose($webdictfile);

// $lines = explode(',', $html_content);
// $pairs = array_map(function ($el) {return explode(' = ', $el);}, $lines);
// echo "<pre>";
// var_dump($lines);
// var_dump($pairs);
// echo "</pre>";

$webdictfile = fopen($filename, 'r');
echo fgets($webdictfile)."<br>";
echo fgets($webdictfile)."<br>";
echo fgets($webdictfile)."<br>";
echo fgetc($webdictfile)."<br>";
echo fgetc($webdictfile)."<br>";
echo fgetc($webdictfile)."<br>";
echo fgetc($webdictfile)."<br>";
fclose($webdictfile);

?>