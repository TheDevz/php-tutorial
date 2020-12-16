<?php
# Date and time in PHP

// echo "Current date: " . date(); // throws an error
// echo "<br>";

echo "Current date: " . date('Y/m/d'); // by default it takes current timestamp[time()]
echo "<br>";
// echo "Current date: " . date('Y/m/d', time());
// echo "<br>";

// getting current timestamp
echo "Current timestamp: " . time();
echo "<br>";

// get a date
echo "Today is " . date('d') . "th day of the month";
echo "<br>";
echo "This month is " . date('m') . "th month of the year";
echo "<br>";
echo "Current year is " . date('Y');
echo "<br>";
echo "Today is " . date('l');
echo "<br>";

// separating date parts
echo "Using slashes, today is " . date('d/m/Y');
echo "<br>";

echo "Using dashes, today is " . date('d-m-Y');
echo "<br>";

echo "Using points, today is " . date('d.m.Y');
echo "<br>";

echo "Using other symbol, today is " . date('d|m|Y');
echo "<br>";

echo "Using spaces, today is " . date('d m Y');
echo "<br>";

//get time
echo "Now is " . date('H') . " hours";
echo "<br>";
echo "Now is " . date('h') . " hours";
echo "<br>";
echo "Current minutes " . date('i');
echo "<br>";
echo "Current seconds are " . date('s');
echo "<br>";
echo "Current time is " . date('h:i:sa');
echo "<br>";

echo "Current time is " . date('H:i:s');
echo "<br>";

date_default_timezone_set("America/New_York");
echo "The time of America/New_York is " . date("h:i:sa");
echo "<br>";

date_default_timezone_set("Asia/Tashkent");
echo "The time of Asia/Tashkent is " . date("H:i:s");
echo "<br>";
