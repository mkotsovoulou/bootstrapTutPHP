<?php
session_start();
echo $_SESSION['username'];

if ($_SESSION['role'] == "A") {
	echo "<a href='admin.php'> Go to Admin Panel </a></br>";
}
?>
</br>
<a href="page4.php">Go to page 4</a> </br>
<a href="page3.php">Go to page 3 to logout</a>