<div class="container">
	<!-- speakers grid 6 columns-->
	<h1 id="speakers" class="display-3 text-center mt-3 text-secondary"> Speakers</h1>


	<div class="row">
		<?php
		include_once ('inc/functions.php');
		$speakers = getSpeakers();

		foreach ($speakers as $speaker) {
			?>
			<div class="col-md-6 col-lg-4 ">
				<div class="card" style="width: 18rem;">
					<img src="img/<?php echo $speaker["photo"] ?>" class="card-img-top" alt="...">
					<div class="card-body">
						<h4 class="card-title text-secondary"><?php echo $speaker["firstname"] . " " . $speaker["lastname"]; ?> </h4>
						<p class="card-text my-5">
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