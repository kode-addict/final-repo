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
			<form action"{{ url('auth/login') }}" method="POST" class="ui form">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">	
			
			<h3 class="ui dividing header">Login</h3>

			<div class="field">
				<label>Email Address</label>
				<input name="email" placeholder="Add Your Email Address" type="email" value="{{ old('email') }}" required="" autofocus>
			</div>

			<div class="field">
				<label>Password</label>
				<input name="password" placeholder="Type Your Password" type="password" required="">
			</div>

			<button class="ui green button" type="submit">Login</button>

			</form>
			<h3>or</h3>
			<label>Login with Facebook account</label><br>
			<form class="ui form" action="{{ url('auth/login_with_fb') }}" method="GET">
				<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
				<!-- <input type="hidden" value="/account/team_check/?next=/" name="next"> -->
				<!-- <button class="ui facebook button" type="submit"> Facebook </button> -->
				<input class="ui facebook button" value="Facebook" type="submit">
			</form>
			<hr><br>
				<a href="{{ url('password/email') }}">Forget Your Password ?</a><br>
				<label>There is no account?</label><br><a href="{{ url('/register') }}">Sign up Here</a>
						
			
			

		</section> <!-- Candidate Detail END -->

		

	<footer>
		
	</footer> <!-- FOOTER END -->
</body>
</html>