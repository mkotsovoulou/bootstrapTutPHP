<!-- jumbotron -->
<div class="jumbotron jumbotron-fluid bg-info text-white">
	<div class="container text-sm-center pt-5">
		<h1 class="display-2">Full Stack Conf</h1>
		<p class="lead">
			A One-day Conference About All Things JavaScript!
		</p>
		<!-- I will hide the buttons in the current page is not the index -->
		<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') {
			?>
			<div class="btn-group mt-4" role="group" aria-label="Callout buttons">
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#register">Register Now</button>
				<a class="btn btn-light btn-lg" href="#speakers">See Speakers</a>
			</div>
			<?php
		} ?>
	</div>
</div>
<!-- /jumbotron -->