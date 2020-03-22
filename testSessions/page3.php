<?php
session_start();
echo "Bye, " . $_SESSION['username'];
session_destroy();
?>

<a href="page2.php">Back to page 2</a>