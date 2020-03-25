<?php
include_once ('../inc/functions.php');
if (isset($_POST["id"])) {
	$id = $_POST["id"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$role = $_POST["role"];
	$isAdmin = $_POST["isAdmin"];
	$check_value = isset($_POST['isAdmin']) ? "Y" : "N";
	//	echo $check_value;
	if (isset($id) && isset($name) && isset($email) && isset($role)) {
		updateRegistration($id, $name, $email, $role, $check_value);
		header("Location: /bootstrapTut/admin/manageUsers.php");
		exit;
	} else echo 'Values are empty';

} else echo 'Choose a user to update'; ?>