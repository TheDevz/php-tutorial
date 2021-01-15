<?php
define('TELEGRAM_API_TOKEN', '1501335361:AAGWSK_fMl6V6w5FeayfbK-ihlEiYd8xJdo');
define('BOT_URL', 'https://api.telegram.org/bot' . TELEGRAM_API_TOKEN . '/');

$chat_id = '469750202';

$msg = "Hello i'm bot!";

$url = BOT_URL . 'sendMessage'; # sendMessage is method(function)

$data = [
	'chat_id' => $chat_id,
	'text' => $msg,
];
$options = array('http' => array(
                                'method' => 'POST',
                                'header' => "Content-Type:application/x-www-form-urlencoded\r\n",
                                'content' => http_build_query($data)));

$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);

echo '<pre>';
echo $result;
echo '</pre>';
?>