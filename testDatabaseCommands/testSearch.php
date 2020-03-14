<?php
include_once ('inc/functions.php');

$name=$_GET['name'];

if (strlen($name) < 3) {
echo 'please enter more specific search criteria';
}
else {

$data = searchSpeaker($name);

foreach ($data as $speaker) {
	echo $speaker['lastname'] . " " . $speaker['firstname'] . '<br>';
}

}
?>