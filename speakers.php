<div id="speakers" class="container spacing">
	<!-- speakers grid 6 columns-->
	<h1 class="display-4 text-center text-muted"> Speakers</h1>


	<div class="row">
		<?php
		include_once ('inc/functions.php');
		$speakers = getSpeakers();

		foreach ($speakers as $speaker) {
			?>
			<div class="col-md-6 col-lg-4 mb-3">
				<div class="card  h-100">
					<img src="img/<?php echo $speaker["photo"] ?>" class="card-img-top" alt="...">
					<div class="card-body">
						<h4 class="card-title"><?php echo $speaker["firstname"] . " " . $speaker["lastname"]; ?> </h4>
						<p class="card-text">
							<?php echo $speaker["resume"]; ?>
						</p>
					</div>
				</div>
			</div>

			<?php
		} //end for each
		?>

	</div>
</div>