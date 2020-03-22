<?php
include_once ('../inc/functions.php');


$email = 'np@yahoo.com';
$password = '123';

$result = login($email, $password);

if ($result == "X") {
	echo "wrong uname or password";
} else {
	echo "ok, you are:" . $result;
}