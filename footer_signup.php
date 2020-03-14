<div class="container">
	<!-- Footer and signup form -->
	<hr>
	<div class="row py-4 text-muted">
		<div class="col-md col-lg-4 col-xl-6 ml-auto">
			<p>
				<strong>About Treehouse</strong>
			</p>
			<p>
				Treehouse brings affordable technology education to people everywhere to help them achieve their dreams and change the world.
			</p>
		</div>
		<div class="col-md col-lg-4 col-xl-6 ml-auto">
			<p>
				<strong>Stay up-to-date on Full Stack Conf</strong>

			</p>
			<div class="input-group">
				<input id="emailToSave" type="text" class="form-control" placeholder="Email">
				<span class="input-group-btn">
					<button id="newsletter" class="btn btn-primary" type="button">Sign up</button>
				</span>

			</div>
			<div id="flashMessage">
				Thank you for signing up for our newsletter
			</div>
		</div>
	</div>
	<hr><!-- /signup form -->
</div>

<script>
	$(document).ready(function() {
		$('#newsletter').click(function() {
			var email = $('#emailToSave').val();

			$.ajax({
				type: "POST",
				url: "insert_email.php",
				data: {
					p_email: email
				}
			}).done(function(msg) {
				$('#flashMessage').html(msg);
				$("#flashMessage").slideDown(1000).delay(1000).slideUp();
			});
		});
	});
</script>