<!DOCTYPE html>
<html>
<head>
	<title>Mae Pay Soh - Web Application</title>
	<link rel="stylesheet" type="text/css" href="{{ url("bower_components/semantic/dist/semantic.min.css") }}">
	<script src="{{ url("bower_components/jquery/dist/jquery.min.js") }}"></script>
	<style type="text/css">
		.main {
			margin-top: 80px;
		}
	</style>
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
			<form class="ui form" method="POST" action="{{ url('password/email') }}">
			 {!! csrf_field() !!}
			<h3 class="ui dividing header">Reset Password</h3>

			<p>Did you forget your password?</p>
			<p>We can help you to reset your account password.</p>
			<p>Provide your email address when you registered your account on this website.</p>

			<div class="field">
				<label>Registered Email Address</label>
				<input type="email" name="email" value="{{ old('email') }}" placeholder="Type Your Email Address" type="email" required="">
			</div>

			<button class="ui green button" type="submit">Send Password Reset Link </button>

			</form>

		</section> <!-- Candidate Detail END -->
		

	<footer>
		
	</footer> <!-- FOOTER END -->
</body>
</html>