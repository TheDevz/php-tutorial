<?php
if (strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
	if (count($_POST) === 2) {
		if (isset($_POST['email']) && !empty($_POST['email'])) {
			$email = $_POST['email'];
		}
		if (isset($_POST['password']) && !empty($_POST['password'])) {
			$password = $_POST['password'];
		}
		header("location: welcome.php?email=$email&password=$password");
	} else {
		echo "Less fields are provided";
	}
} else if (strtolower($_SERVER['REQUEST_METHOD']) === 'get') {
	echo "GET request is not allowed";
}
?>