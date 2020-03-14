<?php
include_once ('inc/functions.php');

$email='accc@yahoo.com';

if (newsletter($email)==1) {
 echo $email . " inserted <br>";
} else {
 	echo $email . " already exists! <br>";
 }


$data = displayemails();
foreach ($data as $newsletter) {
	echo $newsletter['email'] . '<br>';
}

?>