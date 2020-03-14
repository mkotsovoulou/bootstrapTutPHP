<?php
include ('inc/functions.php');

//$results = $db->query("select * from speakers"); //if the query is wrong $results is false

//var_dump($results);

//echo $results->rowCount();
//echo "<br>";
//echo $results->columnCount();

//$speakers = $results->fetchAll(PDO::FETCH_ASSOC);

//var_dump($speakers);

$data = getSchedule();
foreach ($data as $d) {
	echo $d["title"];
}

?>