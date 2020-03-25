$(document).ready(function() {

	//CODE to highlight the active link
	$(".nav-item.nav-link").on("click", function() {
		$(this).addClass("active").siblings().removeClass('active');
	});


	//CODE TO HANDLE THE SUBMIT OF THE NEWSLETTER FORM (in footer_signup.php)
	$('#newsletter').click(function() {
		var email = $('#emailToSave').val();

		$.ajax({
			type: "POST",
			url: "insert_email.php",
			data: {
				p_email: email
			}
		}).done(function(msg) {
			//	console.log("done from newsletter click" + msg);
			$('#flashMessage2').html(msg);
			$("#flashMessage2").slideDown(1000).delay(1000).slideUp();
		});
	});

	$('.delete').click(function(e) {
		if (!confirm('Are you sure you want to DELETE this user?'))
			e.preventDefault();
	});

	//CODE TO HANDLE THE SUBMIT OF THE REGISTRATION FORM
	$('#registrationForm').submit(function(e) {
		//prevent the default form submit operation since we will manually submit the form using ajax
		e.preventDefault();

		var name = $('#name').val();
		var email = $('#email').val();
		var password1 = $('#password1').val();
		var password2 = $('#password2').val();
		var role = $('#role').val();

		//Write the code to Verify password ... 
		//If the password is wrong display a danger flash message
		//else continue to submit the data and insert the registration




		$.ajax({
				type: "POST",
				url: "insert_registration.php", //registration php returns an array: position 0 is true or false and position 1 is the message
				data: {
					p_name: name,
					p_email: email,
					p_password: password1,
					p_role: role
				}
			}).done(function(msg) {
				//alert-success alert-danger
				if (!msg[0]) {
					$('#flashMessage1').removeClass('alert-success').addClass('alert-danger');
					$('#flashMessage1').html(msg[1]);
					$("#flashMessage1").slideDown(1000).delay(1000).slideUp();
				} else {
					$('#flashMessage1').removeClass('alert-danger').addClass('alert-success');
					$('#flashMessage1').html(msg[1]);
					$("#flashMessage1").slideDown(1000).delay(1000).slideUp();
					setTimeout(function() {
						$('#register').modal('hide');
					}, 2000);

				}

			})
			.fail(function(jqXHR, exception) {
				//The fail will only execute if insert_registration.php is not found
				console.log("FAIL:" + jqXHR);
			});



	});

	//CODE TO HANDLE THE SUBMIT OF THE SIGN IN FORM
	$('#signin').submit(function(e) {
		//prevent the default form submit operation since we will manually submit the form using ajax
		e.preventDefault();

		var email = $('#InputEmail').val();
		var password = $('#InputPassword').val();


		$.ajax({
			type: "POST",
			url: "login.php",
			data: {
				p_email: email,
				p_password: password
			}
		}).done(function(loginMsg) {
			//Login php returns X if there was an error
			console.log("The message from login is " + loginMsg);
			if (loginMsg == '0') {
				$('#flashMessage').removeClass('alert-success').addClass('alert-danger');
				displayMsg = "Wrong username or password. Try Again!";
			} else {
				$('#flashMessage').removeClass('alert-danger').addClass('alert-success');
				displayMsg = "You have signed in!";
				setTimeout(function() {
					window.top.location = "index.php";
				}, 1500);
			}
			$('#flashMessage').html(displayMsg);
			$("#flashMessage").slideDown(1000).delay(1000).slideUp();

		});


	});




});