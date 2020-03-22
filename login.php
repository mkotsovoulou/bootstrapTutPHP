<?php
session_start();
include_once ('inc/functions.php');


$email = $_POST['p_email'];
$password = $_POST['p_password'];

$result = login($email, $password);

echo $result;