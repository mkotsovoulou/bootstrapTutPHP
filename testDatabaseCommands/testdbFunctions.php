<?php
include ('inc/functions.php');

$speakers = getSpeakers();

foreach ($speakers as $speaker) {
	echo $speaker["lastname"] . " ". $speaker["firstname"] . "<img src='img/" . $speaker["photo"] . "'/><br>";
}


?>