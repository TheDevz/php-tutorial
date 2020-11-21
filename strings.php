<?php

# Create simple string
//			['H', 'e', 'l', 'l', ...]
$hello = "Hello";
//		  012345
$world = "world!";

# String concatenation
echo $hello . " " . $world;
echo "<br>How " . " r u?";

# String functions

## get the length of the string
echo "<br>'Hello' consists of " . strlen($hello) . " characters"; //5
echo "<br>";

## get rid of spaces from sides

// echo "<br>";
// $spaced_word = "      Some text with space        ";
// echo '<br>' . '<p>' . $spaced_word . '</p>';
// $word_without_spaces = trim($spaced_word);
// echo '<br>' . $word_without_spaces;

$word = "     hot   ";

if (trim($word) === 'hot') {
	echo "No need of jacket";
} else {
	echo "Wear jacket";
}

// ltrim($word); // removes spaces from left side
// rtrim($word); // removes spaces from right side

## counting words of a string
$some_text = "Loren ipsum domeo ...etc";
echo "<br> [$some_text] consists of " . str_word_count($some_text) . " words";

## reversing the string
$normal_word = "armstrong";
$reversed_word = strrev($normal_word);
echo '<br>strrev($normal_word) === ' . $reversed_word; //gnortsmra
echo "<br>strrev(123456) === " . strrev(123456); //654321

## UPPERCASE & lowercase of string
echo "<br>" . strtoupper($hello); // HELLO
echo "<br>" . strtolower($hello); // hello

$word = "HOt";

if (strtolower($word) /*hot*/ === 'hot') {
	echo "<br>No need of jacket";
} else {
	echo "<br>Wear jacket";
}

## UPPERCASE & lowercase of 1st character of a string
echo '<br>' . lcfirst($hello); // hello
echo '<br>' . ucfirst($world); // World!

$firstname = "abuBAKr"; //-> Abubakr
echo "<br>" . $firstname;
echo "<br>" . ucfirst(strtolower($firstname));

## position of the given character within the string
//Find the position of the first occurrence of a substring in a string
$indexOfWorld = strpos($world, " world");
if ($indexOfWorld === false) {
	echo "<br>This string doesn't contain ' world' word";
}
echo "<br>" . $indexOfWorld;

## returns substring of a string
$contacts = "EduTheDevs, info@edu.thedevs.co";
$email = substr($contacts, 12);
$name = substr($contacts, 0, 10);
echo "<br>Name is " . $name;
echo "<br>Email is " . $email;

## replacing specific string by the given string
$details = "<br>Name is %n, Email is %e";
echo "<br>" . str_replace('domeo', 'romeo', $some_text);
$details_with_name = str_replace('%n', $name, $details);
echo $details_with_name;
echo str_replace('%e', $email, $details_with_name);

## case insensitive string replacement
$details = "<br>Name is %N, Email is %e";
echo "<br>" . str_ireplace('domeo', 'romeo', $some_text);
$details_with_name = str_ireplace('%n', $name, $details);
echo $details_with_name;
echo str_ireplace('%e', $email, $details_with_name);

## repeating the given string the give times
echo "<br>";
echo str_repeat("=", 100);

// for ($i = 0; $i < 100; $i++) {
// 	echo "=";
// }

# Multiline text and line breaks
$longText = "
Hello world!
lorem
ipsum
modeo
";
echo nl2br($longText);

# Multiline text and reserve html tags

//XSS atack
echo htmlentities("<script>document.location='https://edu.thedevs.co';</script>");
echo htmlspecialchars_decode(htmlspecialchars("<script>document.location='https://edu.thedevs.co';</script>"));

// http://php.net/manual/en/ref.strings.php