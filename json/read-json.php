<?php 
$filename = 'users.json';

$users_file = fopen($filename, 'r');

$content = fread($users_file, filesize($filename));

fclose($users_file);
// $users = [
// 	"user1" => [
// 		"firstname" => "John",
// 		"lastname" => "Doe",
// 	]
// ];

// echo "<pre>";
// var_dump($content);
// var_dump($users);
// echo "</pre>";

$users = json_decode($content, true);// true as 2nd argument used to convert it into array, rather than Object

echo "<pre>";
var_dump($content);
echo "json_decode() makes JSON string to be PHP acceptable data type(in our case array)\n";
var_dump($users);
echo $users['1']['firstname'];
echo "</pre>";

$users['2'] = [
	"firstname" => "Mike",
	"lastname" => "Tyson",
	"email" => "mike@tyson.com",
	"password" => "mikytiky"
];

echo "<pre>";
var_dump($users);
echo "</pre>";

$users_file = fopen($filename, 'w');// now we use writing mode

fwrite($users_file, json_encode($users, JSON_PRETTY_PRINT));

echo "json_encode() makes PHP acceptable data type(in our case array) to be JSON string\n";

$user_email_input = 'mike@tyson.com';
$user_password_input = 'mikytiky';

if ($user_password_input == $users[2]['password']) {
	echo "<hr>U are registered";
}

fclose($users_file);

//{
//    "firstname":  "Firsttest",
//      "lastname": "Lasttest",
//      "email": "test@test.com"
//    },
//{
//    "firstname": "John",
//      "lastname": "Doe",
//      "email": "john@doe.com"
//    }