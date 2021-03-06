<?php

function login($email, $password) {
	include ('db.php');
	session_start();
	$results = $db->prepare('SELECT * FROM registration WHERE email = ?');
	$results->bindValue(1, $email);
	$results->execute();
	$userInfo = $results->fetchAll(PDO::FETCH_ASSOC);

	if (count($userInfo) == 1 && password_verify($password, $userInfo[0]["password"])) {
		// LOGIN SUCCESS
		$_SESSION["email"] = $email;
		$_SESSION["name"] = $userInfo[0]["name"];
		$_SESSION["isAdmin"] = $userInfo[0]["isAdmin"];
		return 1;
	} else {
		return 0;
		//LOGIN FAILED
	}

}


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

// In case there is no database, you can create an array with you data for texting
function getSpeakersxx() {
	$speakers = array();
	$speakers[1] = array ("lastname" => "McVue", "firstname" => "Vivianne", "photo" => "vivianne.png");
	$speakers[2] = array ("lastname" => "NodeStradamus", "firstname" => "", "photo" => "nodestradamus.png");
	$speakers[3] = array ("lastname" => "Redux", "firstname" => "Robbie", "photo" => "robbie.png");
	return $speakers;
}


// NOT THE BEST WAY --> its better to use prepared statements
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

function register($name, $email, $password, $role) {
	include ('db.php');
	//Hash the password before inserting it into the table
	$password = password_hash($password, PASSWORD_DEFAULT);

	$results = $db->prepare('insert into registration (name, email, password, role) values (?,?,?,?)');
	$results->bindValue(1, $name);
	$results->bindValue(2, $email);
	$results->bindValue(3, $password);
	$results->bindValue(4, $role);
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

function getRegisteredUsers() {
	include ('db.php');
	$results = $db->query("select * from registration"); //if the query is wrong $results is false
	$data = $results->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}

function getRegisteredUserById($id) {
	include ('db.php');
	session_start();
	$results = $db->prepare('SELECT * FROM registration WHERE id = ?');
	$results->bindValue(1, $id);
	$results->execute();
	$userInfo = $results->fetchAll(PDO::FETCH_ASSOC);
	return $userInfo;
}

function updateRegistration($id, $name, $email, $role, $isAdmin) {
	include ('db.php');

	$results = $db->prepare('update registration set name = ?, email=?, role= ?, isAdmin= ? where id = ?');
	$results->bindValue(1, $name);
	$results->bindValue(2, $email);
	$results->bindValue(3, $role);
	$results->bindValue(4, $isAdmin);
	$results->bindValue(5, $id);
	$results->execute();
	return $results->rowCount();

}

function deleteRegistration($id) {
	include ('db.php');

	$results = $db->prepare('delete from registration where id = ?');
	$results->bindValue(1, $id);
	$results->execute();
	return $results->rowCount();
}

function updateAvatar($email, $img) {
	include ('db.php');
	$results = $db->prepare('update registration set avatar = ? where email = ?');
	$results->bindValue(1, $img);
	$results->bindValue(2, $email);
	$results->execute();
	return $results->rowCount();
}

function getAllUsers() {
	include ('db.php');
	$results = $db->query("select * from registration"); //if the query is wrong $results is false
	$data = $results->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}

function listRoles($selected) {
	$selected_role = $selected;
	$temp_str = '';
	$temp_str .= "<select class='form-control' name='role'>";

	$roles_array = array("full stack js developer" => "Full Stack JavaScript Developer",
		"front end developer" => "Front End Developer",
		"back end developer" => "Back End Developer",
		"designer" => "Designer",
		"student" => "Student");
	foreach ($roles_array as $key => $value) {
		if ($key == $selected_role) {
			// For selected option.
			$temp_str .= '<option value="'.$key.'" selected>'.$value.'</option>';
		} else {
			$temp_str .= '<option value="'.$key.'">'.$value.'</option>';
		}
	}
	$temp_str .= '</select>';

	return $temp_str;

}

?>