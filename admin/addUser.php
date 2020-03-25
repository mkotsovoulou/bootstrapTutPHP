<?php
include_once ('../inc/functions.php');
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password1"];
$role = $_POST["role"];

register($name, $email, $password, $role);
header("Location: /bootstrapTut/admin/manageUsers.php");
exit;
?>