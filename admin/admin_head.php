<?php
session_start();
//temporary for testing and development
//Remember to remove it
//$_SESSION['isAdmin'] = 'Y';
//$_SESSION['name'] = 'ADMIN';
if ($_SESSION['isAdmin'] != 'Y') {
	header("Location: /bootstrapTut/index.php");
	exit;
}
define("PROJECT_PATH", "/bootstrapTut/");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Full Stack Conf</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo PROJECT_PATH ?>css/custom.css">

	<script
		src="../js/jquery-3.4.1.min.js"></script>

</head>

<body id="home" data-spy="scroll" data-target=".navbar" data-offset="100" data-gr-c-s-loaded="true" cz-shortcut-listen="true">
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" data-offset="100">
		<div class="container">
			<a class="navbar-brand order-1 mr-0" href="<?php if (isset($_SESSION['isAdmin']))
					echo "admin_signout.php"; ?>">
				<?php if (isset($_SESSION['isAdmin']))
					echo $_SESSION['email'] . " Click to Sign out";
				?>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link active" href="index.php">Admin Home <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="manageUsers.php">Registrations</a>
					<a class="nav-item nav-link" href="manageSchedule.php">Schedule</a>
					<a class="nav-item nav-link" href="manageSpeakers.php">Speakers</a>
				</div>
			</div>
		</div>
	</nav>


	<!-- /navbar -->