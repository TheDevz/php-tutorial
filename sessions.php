<?php
session_start();
echo "Hello world";

echo "<pre>";
var_dump($_SESSION);
$_SESSION['logged'] = true;
$_SESSION['text'] = 'another session text';
var_dump($_SESSION);
echo "</pre>";

