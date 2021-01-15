<?php
// side effect: change ini settings
ini_set('error_reporting', E_ALL);

// side effect: loads a file
include "file.php";

// side effect: generates output
echo "<html>\n";

//side effect: etc.
if(MY_NAME === 'Abubakr'){
    echo 'hello abubakr';
}
