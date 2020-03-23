<?php
//To demonstrate how hashing works
$password = '123';
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
echo 'Password is: ' . $password;
echo '<br>';
echo 'The Hashed Password is: ' . $hashedPassword;
echo '<br>';

$verify = password_verify($password, $hashedPassword);
echo 'The password verify returns : ' . $verify;
echo '<br>';
$incorrectPassword = '111';

$verify = password_verify($incorrectPassword, $hashedPassword);
var_dump($verify);
//Boolean false in PHP does not return 0 but an empty string

if (empty($verify)) echo "empty"; else echo "has value";

echo '<br>';
echo 'The password verify (with incorrect password) returns : ' . $verify;

?>