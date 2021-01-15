<?php
$cars = ['BMW', 'Audi', 'Peugeout'/*, ... , 30n */];

/** WET - we enjoy typing(or wasting everyone's time) */
echo $cars[0];
echo $cars[1];
echo $cars[2];
echo $cars[3];
echo $cars[4];
echo $cars[5];
echo $cars[6];
/* ... */
echo $cars[29];

/** DRY - don't repeat yourself
 *
 * Advantage:
 * Less code is good:
 * It saves time and effort,
 * is easy to maintain,
 * and also reduces the chances of bugs.
 */
foreach($cars as $car){
    echo $car;
}

/** KISS - keep it simple stupid
 */

$weather = $isWeatherGood ? 'Weather good' : 'Weather bad';

if ($isWeatherGood){
    'Weather good';
} else {
    'Weather bad';
}

/** YAGNI - you aren't gonna need it
 * Do not add functionality until it is completely necessary
 *
 * Even if you are totally sure that you will need a feature or piece of code later on, do not implement it now.
 * Most likely, you will not need
 * it after all or what you actually
 * need is quite different from what
 * you foresaw needing earlier.
 */