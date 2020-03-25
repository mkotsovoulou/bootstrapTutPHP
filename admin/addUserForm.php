<?php
include 'admin_head.php';
?>
<div class="container spacing ">
	<h1 class="my-5"> Manage Conference Registrations </h1>
	<!-- registration form -->
	<div class="form-with-border">
		<h3 class="text-center text-primary">Add User</h3>
		<form id="addForm" method="POST" action="addUser.php">
			<h5 class="mb-4">Basic Info</h5>
			<div class="form-group">
				<label class="form-control-label" for="name">Name:</label>
				<input type="text" class="form-control" name="name" id="name" required>
			</div>
			<div class="form-group">
				<label class="form-control-label" for="email">Email:</label>
				<input type="email" class="form-control" name="email" id="email" required>
			</div>
			<div class="form-group">
				<label class="form-control-label" for="password1">Password:</label>
				<input type="password" class="form-control" name="pass1" id="password1" required>
			</div>
			<div class="form-group">
				<label for="role">Job Role:</label>
				<select class="custom-select form-control" name="role" id="role">
					<option value="full stack js developer">Full Stack JavaScript Developer</option>
					<option value="front end developer">Front End Developer</option>
					<option value="back end developer">Back End Developer</option>
					<option value="designer">Designer</option>
					<option value="student">Student</option>
				</select>
			</div>
			<hr class="mb-4">
			<button type="submit" class="btn btn-primary btn-lg">Register</button>

		</form>
		<!-- /registration form -->
	</div>
	<?php
	include 'admin_final.php';
	?>