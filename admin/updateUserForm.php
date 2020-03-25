<?php
include 'admin_head.php';
?>
<div class="container spacing ">
	<h1 class="my-5"> Manage Conference Registrations </h1>
	<div class="form-with-border">
		<?php
		include_once ('../inc/functions.php');
		if (isset($_POST["id"])) {


			$userToEdit = getRegisteredUserbyId($_POST['id']);

			echo '<h3 class="text-center text-primary">Edit User Details</h3>';
			echo '<form name="update" action="updateUser.php" method="POST">';
			echo  '<input type="hidden" value="' . $userToEdit[0]["id"] . '" name="id"/>';
			echo    '<div class="form-group">';
			echo    '<label for="name">Name</label>';
			echo    '<input type="text"  class="form-control" value="' . $userToEdit[0]["name"] . '" name="name" required>';
			echo    ' <small id="nameHelp" class="form-text text-muted">First Name and Last Name</small>';
			echo    "</div>";
			echo   '<div class="form-group">';
			echo    '<label for="email">email</label>';
			echo  '<input type="text" class="form-control" value="' . $userToEdit[0]["email"] . '" name="email" required>';
			echo    "</div>";
			echo   '<div class="form-group">';
			echo    '<label for="role">role</label>';
			echo  listRoles($userToEdit[0]["role"]);
			echo    "</div>";
			echo	"<div class='custom-control custom-checkbox'>";
			$isChecked = ($userToEdit[0]["isAdmin"] == "Y")?" value='Y' checked ":" value='Y'";
			$checkbox = "<input class='form-check-input' type='checkbox' name='isAdmin' " . $isChecked . ">";
			echo $checkbox;
			echo	"<label class='form-check-label' for='isAdmin'>Is Administrator</label>";
			echo    "</div>";
			echo    '<div class="form-group mt-3">';
			echo '<button type="submit" class="btn btn-primary text-right" value ="Save" name="savebtn">Save</button>';
			echo    "</div>";
			echo '</form>';
		} else echo 'Choose a user to edit first';
		?>

	</div>
</div>
<?php
include 'admin_final.php';
?>