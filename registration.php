<!--=====================================
        FORM MODAL
       =====================================-->

<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="register form" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header bg-info text-white">
				<h5 class="modal-title" id="exampleModalLabel">Register for Full Stack Conf</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<!-- registration form -->


				<form id="registrationForm">
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<strong>Hurry!</strong> Early bird registration ends in two days.
					</div>
					<div id="flashMessage1" class="alert alert-success fade show" role="alert" style="display:none;"></div>
					<h5 class="mb-4">Basic Info</h5>
					<div class="form-group">
						<label class="form-control-label" for="name">Name:</label>
						<input type="text" class="form-control" id="name" required>
					</div>
					<div class="form-group">
						<label class="form-control-label" for="email">Email:</label>
						<input type="email" class="form-control" id="email" required>
					</div>
					<div class="form-group">
						<label for="role">Job Role:</label>
						<select class="custom-select form-control" id="role">
							<option value="full stack js developer">Full Stack JavaScript Developer</option>
							<option value="front end developer">Front End Developer</option>
							<option value="back end developer">Back End Developer</option>
							<option value="designer">Designer</option>
							<option value="student">Student</option>
						</select>
					</div>
					<hr class="mb-4">
					<button type="submit" id="registerbtn" class="btn btn-primary btn-lg">Register</button>

				</form>
				<!-- /registration form -->
			</div>
		</div>
	</div>
</div>