
<?php

function getSpeakers() {
	include ('db.php');
	$results = $db->query("select * from speakers"); //if the query is wrong $results is false
	$data = $results->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}


function getSchedule() {
	include ('db.php');
	$results = $db->query("select * from schedule_d order by time"); //if the query is wrong $results is false
	$data = $results->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}

function getSpeakersxx() {
$speakers = array();
$speakers[1] = array ("lastname"=>"McVue", "firstname"=>"Vivianne", "photo"=>"vivianne.png");
$speakers[2] = array ("lastname"=>"NodeStradamus", "firstname"=>"", "photo"=>"nodestradamus.png");
$speakers[3] = array ("lastname"=>"Redux", "firstname"=>"Robbie", "photo"=>"robbie.png");
return $speakers;
}


// function newsletter($email) {
// 	include ('db.php');
// 	$count = $db->exec("insert into newsletter (email) values ('" . $email . "')");
// 	return $count;
// }

function newsletter($email) {
	include ('db.php');
	$results = $db->prepare('insert into newsletter (email) values (?)');
	$results->bindValue(1, $email);
	$results->execute();
	return $results->rowCount();
	
}

function searchSpeaker($name) {
	include ('db.php');
	$name = '%' . $name . '%';
	
	$results = $db->prepare('select * from speakers where firstname like ? or lastname like ?');
	$results->bindValue(1, $name);
	$results->bindValue(2, $name);
	$results->execute();
	return $results;
	
}



function displayemails() {
	    include('inc/db.php');
		$results = $db->query("select * from newsletter"); //if the query is wrong $results is false
		$data = $results->fetchAll(PDO::FETCH_ASSOC);
		return $data;
}

?>