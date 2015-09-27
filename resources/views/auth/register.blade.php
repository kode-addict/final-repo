<!DOCTYPE html>
<html>
<head>
	<title>Mae Pay Soh - Web Application</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<style type="text/css">
		.main {
			margin-top: 80px;
		}
	</style>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>
<body>
	<header>
		<div class="ui fixed menu">
			<div class="ui container">
				<div class="header item">
					<!-- <img class="logo" src="assets/images/logo.png"> -->
					Mae Pay Soh
				</div>
				
				<div class="right menu">					
					<a href="#" class="item">
						<i class="sidebar icon"></i> Menu					
					</a>
				</div>
			</div>
		</div>			
	</header> <!-- HEADER END -->

	<div class="ui main text container">
		
		<section class="about-candidate ui raised segment"> 
			<form action="{{ url('auth/register') }}" method="POST" class="ui form">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">	
			
			<h3 class="ui dividing header">Registration Form</h3>

			<div class="field">
				<label>Full Name</label>
				<input name="name" placeholder="Type Your Full Name" type="text" required="" autofocus>
			</div>			

			<div class="field">
				<label>Email Address</label>
				<input name="email" placeholder="Type Your Email Address" type="email" required="">
			</div>

			<div class="field">
				<label>Password</label>
				<div class="ui action input">
					<input name="password" placeholder="Type Your Password" type="password" required="" id="password">
					<span class="ui button" id="p-toggle"><i class="unhide icon" id="p-icon"></i></span>
				</div>	
			</div>

			<button class="ui green button" type="submit">Register</button>

			</form>

		</section> <!-- Candidate Detail END -->

		

	<footer>
		
	</footer> <!-- FOOTER END -->

	<script type="text/javascript">
		$(document).ready(function(){
		    alert('Ha');
		    $("#p-toggle").click(function(){
		        $('#password').togglePassword();
		        $('p-icon').remove();
		    });
		});		
	</script>

</body>
</html>		
