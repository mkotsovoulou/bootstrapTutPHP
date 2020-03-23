<?php

include 'admin_head.php';

$_SESSION['isAdmin'] = 'Y';
if ($_SESSION['isAdmin'] == 'Y') {
	?>
	<div class="container spacing ">
		<h1 class="my-5"> Manage Conference Registrations </h1>

		<table class="table table-bordered table-hover">
			<thead>
				<th>ID</td>
				<th>NAME</td>
				<th>email</td>
				<th>ROLE</td>
				<th>UPDATE</td>
				<th>DELETE</td>
			</thead>
			<?php
			include_once ('../inc/functions.php');
			$registeredUsers = getRegisteredUsers();
			foreach ($registeredUsers as $user) {
				echo "<tr>";
				echo "<th>" . $user["id"] . "</th>" .
				"<td>" . $user["name"] . "</td>" .
				"<td>" . $user["email"] . "</td>" .
				"<td>" . $user["role"] . "</td>" .
				'<td>' . '<form name="editForm" action="editRegisteredUser.php" method="POST">' .
				'<input type="hidden" value="' . $user["id"] . '" name="id"/>' .
				'<button type="submit" class="btn btn-primary" value ="Edit" name="editbtn">Edit</button> </form>' . "</td>" .

				'<td>' . '<form name="deleteForm" action="deleteRegisteredUser.php" method="POST">' .
				'<input type="hidden" value="' . $user["id"] . '" name="id"/>' .
				'<button type="submit" class="btn btn-danger" value="Delete" name="deletebtn">Delete</button> </form>' .
				'</td>';

				echo "</tr>";
			}
			?>
		</table>
		<button class="btn btn-success" name="addBTN" onclick="window.location.href='addRegisteredUser.php'"> Add New User
		</button>
		<br>
	</div>
	<?php
} else echo "You do not have access to this page";

// In case your table contains uploaded images...Prepare image SRC using the raw data format:  data:{mime};base64,{data};
//	$src = 'data:image/png;base64,' . base64_encode($row["image"]);
//	$img = '<img src="' . $src . '" width="50px">'; //resize the image to a thumbnail

include 'admin_final.php';
?>