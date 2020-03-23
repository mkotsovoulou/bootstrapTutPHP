<?php
include 'admin_head.php';
?>
<div class="container spacing ">
	<h1 class="my-5"> Manage Conference Speakers </h1>
	<table class="table table-bordered table-hover">
		<thead>
			<th>ID</td>
			<th>LASTNAME</td>
			<th>FIRSTNAME</td>
			<th>PHOTO</td>
			<th>RESUME</td>
			<th>UPDATE</td>
			<th>DELETE</td>
		</thead>
		<?php
		include_once ('../inc/functions.php');
		$speakers = getSpeakers();
		foreach ($speakers as $speaker) {
			echo "<tr>";
			echo "<th>" . $speaker["id"] . "</th>" .
			"<td>" . $speaker["lastname"] . "</td>" .
			"<td>" . $speaker["firstname"] . "</td>" .
			"<td>" . "<img class='card-img-top' src='../img/".$speaker["photo"]."'>" . "</td>" .
			"<td>" . $speaker["resume"] . "</td>" .
			'<td>' . '<form name="editForm" action="editRegisteredUser.php" method="POST">' .
			'<input type="hidden" value="' . $speaker["id"] . '" name="id"/>' .
			'<button type="submit" class="btn btn-primary" value ="Edit" name="editbtn">Edit</button> </form>' . "</td>" .
			'<td>' . '<form name="deleteForm" action="deleteRegisteredUser.php" method="POST">' .
			'<input type="hidden" value="' . $speaker["id"] . '" name="id"/>' .
			'<button type="submit" class="btn btn-danger" value="Delete" name="deletebtn">Delete</button> </form>' .
			'</td>';
			echo "</tr>";
		}
		?>
	</table>
	<button class="btn btn-success" name="addBTN" onclick="window.location.href='addRegisteredUser.php'"> Add New Speaker
	</button>
	<br>
</div>
<?php
include 'admin_final.php';