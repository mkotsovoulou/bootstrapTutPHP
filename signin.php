<?php
include("head.php");
include("jumbotron.php");
//print_r($_SESSION);
?>

<div class="container signin border rounded">

	<form id="signin">
		<div class="form-group">
			<label for="InputEmail">Email address</label>
			<input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" required>
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>
		<div class="form-group">
			<label for="InputPassword">Password</label>
			<input type="password" class="form-control" id="InputPassword" required>
		</div>

		<button id="signinbtn" type="submit" class="btn btn-primary">Submit</button>
		<p id="" class="form-text text-muted">
			Do not have an account? Register <a href="index.php#registration" data-toggle="modal" data-target="#register">here... </a>
		</p>
	</form>
	<div id="flashMessage" class="alert alert-success fade show" role="alert" style="display:none;"></div>

</div>
<?php
include("registration.php");
include("final.php");
?>