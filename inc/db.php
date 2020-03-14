<?php

try {
	$db = new PDO("mysql:host=localhost;dbname=sp2020_class;port=3336", "sp2020_admin", "!Deree2020#");
//	var_dump($db);
	
} catch (Exception $e) {
echo "Connection error... ";
}

?>