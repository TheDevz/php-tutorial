<?php
// echo "string1";
// echo "string2";
// echo "string3";
// echo "string4";
// echo "string5";
// echo "string..";
// echo "string";
// echo "string";
// echo "string";
// echo "stringN";

// $car_names = ['Mercedes', 'BMW', 'Audi'];

// echo "<br>";
// echo $car_names[0];
// echo "<br>";
// echo $car_names[1];
// echo "<br>";
// echo $car_names[2];

echo "Loops.<br>";

# while
// $count = 0;

// echo "Are you sleeping!<br>";
// while ($count < 0) {
// 	echo "$count. Wake up!<br>";
// 	$count++;
// }

# do ... while
// $count = 0;

// do {
// 	echo "$count. Wake up!<br>";
// 	$count++;
// } while ($count < 1);

# for
// for ($counter = 0; $counter < 10; $counter++) {
// 	echo "$counter. Wake up!<br>";
// }

// Pseudo-code
//s1 defines counter which is 0
//s2 checks codition(0 < 10)[it's true], if its true it runs given block of code
//s3 // prints out "0. Wake up!<br>"
//s4 increments counter value($counter++ == $counter = $counter + 1)[$counter = 1]
//s5 checks codition(1 < 10)[it's true], if its true it runs given block of code
//s6 // prints out "1. Wake up!<br>"
//s7 inśrements counter value($counter++ == $counter = $counter + 1)[$counter = 2]
//s8 checks codition(2 < 10)[it's true], if its true it runs given block of code
//s9 // prints out "2. Wake up!<br>"

// ['A', 'b', 'u', ...]
//		 0123456
// $name = "Abubakr";
// for ($i = 0; $i < strlen($name); $i++) {
// 	echo $name[$i] . "<br>";
// }

# foreach

/* DO NOT DO IT

// $name = "Alex";

// foreach ($name as $character) {
// 	echo $character . "<br>";
// }

 */

// //			   0	   1	 3
// $students_name = ['John', 'Doe', 'Alex'];

// //		data struct.  value
// foreach ($students_name as $name) {
// 	echo $name . "<br>";
// }

// //			   0	   1	 3
// $students = ['John', 'Doe', 'Alex'];

// //		data struct.	key 	value
// foreach ($students as $index => $name) {
// 	echo "$index. $name" . "<br>";
// }

// //			   	   key	    val.  key 	  val.   key      val.
// $students_age = ['John' => '18', 'Doe' => '20', 'Alex' => '19'];

// //		 data struct.	   key 	   value
// foreach ($students_age as $name => $age) {
// 	echo "$name is $age y.o." . "<br>";
// }

# break

// for ($x = 0; $x < 10; $x++) {

// 	if ($x == 4) {
// 		break;
// 	}
// 	echo "The number is: $x <br>";
// }

# continue

// for ($x = 0; $x < 10; $x++) {

// 	if ($x == 4) {
// 		continue;
// 	}
// 	echo "The number is: $x <br>";

// }

# break & continue in while

// $x = 0;

// while ($x < 10) {

// 	if ($x == 4) {
// 		$x++;
// 		continue;
// 	}

// 	echo "The number is: $x <br>";
// 	$x++;
// }

// $x = 0;
// while ($x < 10) {
// 	if ($x == 2) {
// 		$x++;
// 		continue;
// 	}

// 	if ($x == 4) {
// 		break;
// 	}
// 	echo "The number is: $x <br>";
// 	$x++;
// }
