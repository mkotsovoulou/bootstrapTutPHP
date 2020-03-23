<?php
include 'admin_head.php';
if ($_SESSION['isAdmin'] == 'Y') {
	?>
	<div class="container spacing ">
		<h1 class="my-5"> Conference Admin Panel</h1>
	</div>
	<?php
} else echo "no access";
include 'admin_final.php';
?>