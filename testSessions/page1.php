<?php
session_start();
$_SESSION['username'] = "mairak";
$_SESSION['firstname'] = "maira";
$_SESSION['lastname'] = "kotsovoulou";
$_SESSION['role'] = "U";

echo $_SESSION['username'] . " " . $_SESSION['firstname'] . $_SESSION['lastname'];

var_dump($_SESSION);

?>


<a href="page2.php">Go to page 2</a>