<div class="container">
	<h1 id="schedule" class="display-3 text-center mt-3 text-secondary"> Schedule</h1>

	<ul class="list-group">


		<?php
		include_once ('inc/functions.php');
		$data = getSchedule();
		foreach ($data as $schedule_line) {
			//for each line of the data
			?>
			<li class="list-group-item">
				<div class='d-flex justify-content-between'>
					<h5 class="mb-1"><?php echo $schedule_line["title"]; ?></h5>
					<span class="badge badge-pill badge-info p-2"><?php echo $schedule_line["time"]; ?></span>

				</div>
				<p class="mb-1">
					<?php echo $schedule_line["speaker"]; ?>
				</p>
			</li>
			<?php
		}
		?>

	</ul>

	<!-- callout button -->
	<button type="button" class="btn btn-outline-info btn-lg d-block mx-auto my-5" data-toggle="modal" data-target="#register">Don't Miss Out, Register Now</button>
</div>