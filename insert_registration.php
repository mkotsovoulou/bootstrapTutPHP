<?php

include_once ('inc/functions.php');

$name = $_POST['p_name'];
$email = $_POST['p_email'];
$role = $_POST['p_role'];

// $name = 'maira';
// $email = 'a@a.com';
// $role = 'Designer';

$message_array = array();

header("Content-Type: application/json");


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$message_array [0] = false;
	$message_array [1] = "Not a valid email";
	echo json_encode($message_array);
} else if (register($name, $email, $role) == 1) {
	$message_array [0] = true;
	$message_array [1] = "<b>Thank you</b> for registering";
	echo json_encode($message_array);
} else {
	$message_array [0] = false;
	$message_array [1] = "This is email is already registred...";
	echo json_encode($message_array);
}
exit();
?>