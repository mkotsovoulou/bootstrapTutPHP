<?php
include_once ('../inc/functions.php');
if (isset($_POST["id"])) {
	$id = $_POST["id"];

	if (isset($id)) {
		deleteRegistration($id);
		header("Location: /bootstrapTut/admin/manageUsers.php");
		exit;
	} else echo 'Values are empty';

} else echo 'Choose a user to delete'; ?>