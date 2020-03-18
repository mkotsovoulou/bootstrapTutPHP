$(document).ready(function() {

	//This is from the footer newsletter registration: footer_signup.php
	$('#newsletter').click(function() {
		var email = $('#emailToSave').val();

		$.ajax({
			type: "POST",
			url: "insert_email.php",
			data: {
				p_email: email
			}
		}).done(function(msg) {
			console.log("done from newsletter click" + msg);
			$('#flashMessage2').html(msg);
			$("#flashMessage2").slideDown(1000).delay(1000).slideUp();
		});
	});


	//This is from the modal form to register for the conference : registration.php
	$('#registerbtn').click(function() {
		if ($('#registrationForm').valid()) {
			var name = $('#name').val();
			var email = $('#email').val();
			var role = $('#role').val();

			$.ajax({
					type: "POST",
					url: "insert_registration.php",
					data: {
						p_name: name,
						p_email: email,
						p_role: role
					}
				}).done(function(msg) {
					//alert-success alert-danger
					if (!msg[0])
						$('#flashMessage1').removeClass('alert-success').addClass('alert-danger');
					else
						$('#flashMessage1').removeClass('alert-danger').addClass('alert-success');
					$('#flashMessage1').html(msg[1]);
					$("#flashMessage1").slideDown(1000);
				})
				.fail(function(jqXHR, exception) {
					console.log("FAIL:" + jqXHR);
				});

		}

	});


});