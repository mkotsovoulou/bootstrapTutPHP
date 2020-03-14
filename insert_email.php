<?php

include_once ('inc/functions.php');

$email = $_POST['p_email'];

if (newsletter($email) == 1) {
	echo 'Thank you ' . $email;
} else {
	echo $email . " you have already registered...";
}

?>