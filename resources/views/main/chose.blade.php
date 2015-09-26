@extends('master')

@section('content')
	<section class="slogan">
		<div class="ui center aligned text container header-text">
			<h1 class="ui header">
				Mae Pay Soh Web Application
			</h1>
			<p>
				Lorem Ispum Hello World
			</p>
		</div>
	</section> <!-- Slogan END -->

	<section class="ui vertical segment hot-candidate">
		<div class="hot-candidate-header">
			<h1 class="ui center aligned header">
				Hot Candidate
				<div class="sub header">This is Some Hot Candidate</div>
			</h1>
		</div> <!-- Candidate Header END -->
		<div class="ui three column center aligned grid hot-candidate-card container">
			<div class="ui four link cards">
				<div class="card">	
					<div class="image">
						<img src="{{ asset('images/avatar.jpg') }}">
					</div>

					<div class="content">
						<div class="header">Matt Giampietro</div>

						<div class="meta">
							<a>Friends</a>
						</div>

						<div class="description">
							Matthew is an interior designer living in New York.
						</div>
					</div>

					<div class="extra content">

							<span class="right floated">
								Joined in 2013
							</span>

							<span>
								<i class="user icon"></i>
								75 Friends
							</span>

					</div>
				</div>

				<div class="card">
					<div class="image">
						<img src="{{ asset('images/avatar.jpg') }}">
					</div>
					<div class="content">
						<div class="header">Molly</div>
						<div class="meta">
							<span class="date">Coworker</span>
						</div>
						<div class="description">
							Molly is a personal assistant living in Paris.
						</div>
					</div>
					<div class="extra content">
							<span class="right floated">
								Joined in 2011
							</span>
							<span>
								<i class="user icon"></i>
								35 Friends
							</span>
					</div>
				</div>

				<div class="card">
					<div class="image">
						<img src="{{ asset('images/avatar.jpg') }}">
					</div>
					<div class="content">
						<div class="header">Elyse</div>
						<div class="meta">
							<a>Coworker</a>
						</div>
						<div class="description">
							Elyse is a copywriter working in New York.
						</div>
					</div>
					<div class="extra content">
							<span class="right floated">
								Joined in 2014
							</span>
							<span>
								<i class="user icon"></i>
								151 Friends
							</span>
					</div>
				</div>

				<div class="card">
					<div class="image">
						<img src="{{ asset('images/avatar.jpg') }}">
					</div>
					<div class="content">
						<div class="header">Molly</div>
						<div class="meta">
							<span class="date">Coworker</span>
						</div>
						<div class="description">
							Molly is a personal assistant living in Paris.
						</div>
					</div>
					<div class="extra content">
							<span class="right floated">
								Joined in 2011
							</span>
							<span>
								<i class="user icon"></i>
								35 Friends
							</span>
					</div>
				</div>

			</div>
		</div>
	</section> <!-- Hot Cardidate END -->

	<div class="ui center aligned vertical about-text segment">
		<div class="ui text container">
			<div class="ui header">Mae Pay Soh</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>

	<div class="wrapper"></div>

	<section class="search-everything">

		<div class="ui center aligned text container">
			<div class="ui header">Choose Your House</div>
		</div><br><br>
	
		<div class="ui one column center aligned container grid">

			<div class="column">
				<button class="ui huge green button" id="lower">The Lower House</button>

				<button class="ui huge violet button" id="state">The State Region</button>

				<button class="ui huge red button" id="upper">The Upper House</button>
			</div>
		</div>

		<div class="ui grid">

			<div class="ui one column centered grid">

				<div class="ten wide computer column sixteen wide mobile" id="the-lower-house">
					
					<div id="lowerhouse">
						<div class="ui three column grid" id="indicator">
							<div class="column"><h5 id="step1header" class="ui header">1.Chose State  <i class="hidden checkmark green icon"></i> </h5></div>	
							<div class="column"><h5 id="step2header" class="ui header grey">2.Chose District <i class="hidden checkmark green icon"></i> </h5></div>	
							<div class="column"><h5 id="step3header" class="ui header grey">3.Chose Township <i class="hidden checkmark green icon"></i> </h5></div>				
						</div>		
					</div>

					<div class="ui segment ten wide computer column questionBox sixteen wide mobile">
						
						<div id="step1">
							<h3>Select Your State First</h3>
							<div class="ui form">
							  	<div class="field">
							    	<select>
									    <option value="">Select State</option>
									    <option value="Kachin">Kachin</option>
									    <option value="Kayah">Kayah</option>
									    <option value="Kayin">Kayin</option>
									    <option value="Chin">Chin</option>
									    <option value="Mon">Mon</option>
									    <option value="Rakhine">Rakhine</option>
									    <option value="Shan">Shan</option>
									    <option value="Yangon">Yangon</option>
									    <option value="Mandalay">Mandalay</option>
									    <option value="Magway">Magway</option>
									    <option value="Naypyitaw">Naypyitaw</option>
									    <option value="Ayeyarwady">Ayeyarwaddy</option>
									    <option value="Rakhine">Bago</option>
								      	<option value="Sagaing">Sagaing</option>
							    	</select>
							  	</div>
							  	<button class="ui button green done">Next</button>
							</div>
						</div>

						<div id="step2">
							<h3>Select Your District</h3>
							<div class="ui form">
							  	<div class="field">
							    	<select>
									    <option value="">Select District</option>
							    	</select>
							  	</div>
							  	<button class="ui button green back">Back</button>
							  	<button class="ui button green done">Next</button>
							</div>

							<div class="ui active inverted dimmer">
							    <div class="ui text loader">Loading</div>
							</div>
						</div>

						<div id="step3">

							<h3>Select Your TownShip</h3>
							<div class="ui form">
								<form action="{{ url('candidate') }}" method="GET">

								  	<div class="field">
								    	<select name="constituency_ts_pcode">
										    <option value="">Select State</option>
								    	</select>
								  	</div>
								  	<input type="hidden" name="legislature" value="lower_house">

								  	<button class="ui button green back">Back</button>
								  	<button class="ui button green done">Search</button>

							  	</form>
							</div>

							<div class="ui active inverted dimmer">
							    <div class="ui text loader">Loading</div>
							</div>
						</div>

					</div><!-- end segment-->
			
				</div><!-- lower house -->

				<div class="ten wide computer column sixteen wide mobile" id="the-state">
							<div id="state_region">
								<div class="ui three column grid" id="indicator">
									<div class="column"><h5 id="statestep1header" class="ui header">1.Chose State  <i class="hidden checkmark green icon"></i> </h5></div>	
									<div class="column"><h5 id="statestep2header" class="ui header grey">2.Chose District <i class="hidden checkmark green icon"></i> </h5></div>	
									<div class="column"><h5 id="statestep3header" class="ui header grey">3.Chose Township <i class="hidden checkmark green icon"></i> </h5></div>				
								</div>
						
							</div>

							<div class="ui segment ten wide computer column questionBox sixteen wide mobile">
								<div id="statestep1">
									<h3>Select Your State First</h3>
									<div class="ui form">
									  	<div class="field">
									    	<select>
											    <option value="">Select State</option>
											    <option value="Kachin">Kachin</option>
											    <option value="Kayah">Kayah</option>
											    <option value="Kayin">Kayin</option>
											    <option value="Chin">Chin</option>
											    <option value="Mon">Mon</option>
											    <option value="Rakhine">Rakhine</option>
											    <option value="Shan">Shan</option>
											    <option value="Yangon">Yangon</option>
											    <option value="Mandalay">Mandalay</option>
											    <option value="Magway">Magway</option>
											    <option value="Naypyitaw">Naypyitaw</option>
											    <option value="Ayeyarwady">Ayeyarwaddy</option>
											    <option value="Rakhine">Bago</option>
										      	<option value="Sagaing">Sagaing</option>
									    	</select>
									  	</div>
									  	<button class="ui button green done">Next</button>
									</div>
								</div>
								<div id="statestep2">


									<h3>Select Your District</h3>
									<div class="ui form">
									  	<div class="field">
									    	<select>
											    <option value="">Select District</option>
									    	</select>
									  	</div>
									  	<button class="ui button green back">Back</button>
									  	<button class="ui button green done">Next</button>
									</div>

									<div class="ui active inverted dimmer">
									    <div class="ui text loader">Loading</div>
									</div>
								</div>

								<div id="statestep3">

									<h3>Select Your TownShip</h3>
									<div class="ui form">
										<form action="{{ url('candidate') }}" method="GET">

										  	<div class="field">
										    	<select name="constituency_ts_pcode">
												    <option value="">Select State</option>
										    	</select>
										  	</div>
										  	<input type="hidden" name="legislature" value="state_region">

										  	<button class="ui button green back">Back</button>
										  	<button class="ui button green done">Search</button>

									  	</form>
									</div>
									<div class="ui active inverted dimmer">
									    <div class="ui text loader">Loading</div>
									</div>
								</div>			
							</div><!-- end segment-->
				
				</div><!-- state region -->		

				<div class="ten wide computer column sixteen wide mobile" id="the-upper-house">

					<div id="upper_house">
								<div class="ui three column grid" id="indicator">
									<div class="column"><h5 id="upperstep1header" class="ui header">1.Chose State  <i class="hidden checkmark green icon"></i> </h5></div>	
									<div class="column"><h5 id="upperstep2header" class="ui header grey">2.Chose Constituency <i class="hidden checkmark green icon"></i> </h5></div>	
								</div>
						
					</div>

					<div class="ui segment ten wide computer column questionBox sixteen wide mobile">
								<div id="upperstep1">
									<h3>Select Your State First</h3>
									<div class="ui form">
									  	<div class="field">
									    	<select>
											    <option value="">Select State</option>
											    <option value="Kachin">Kachin</option>
											    <option value="Kayah">Kayah</option>
											    <option value="Kayin">Kayin</option>
											    <option value="Chin">Chin</option>
											    <option value="Mon">Mon</option>
											    <option value="Rakhine">Rakhine</option>
											    <option value="Shan">Shan</option>
											    <option value="Yangon">Yangon</option>
											    <option value="Mandalay">Mandalay</option>
											    <option value="Magway">Magway</option>
											    <option value="Naypyitaw">Naypyitaw</option>
											    <option value="Ayeyarwady">Ayeyarwady</option>
											    <option value="Rakhine">Bago</option>
										      	<option value="Sagaing">Sagaing</option>
									    	</select>
									  	</div>
									  	<button class="ui button green done">Next</button>
									</div>
								</div>


								<div id="upperstep2">

									<h3>Select Your Constituency</h3>
									<div class="ui form">
										<form action="{{ url('candidate') }}" method="GET">

										  	<div class="field">
										    	<select name="constituency_am_pcode">
												    <option value="">Select Constituency</option>
										    	</select>
										  	</div>
										  	<input type="hidden" name="legislature" value="upper_house">

										  	<button class="ui button green back">Back</button>
										  	<button class="ui button green done">Search</button>

									  	</form>
									</div>
									<div class="ui active inverted dimmer">
									    <div class="ui text loader">Loading</div>
									</div>
								</div>			

					</div><!-- end segment-->

				</div><!-- upper house region -->
			</div>

		</div>

		<div class="ui center aligned container grid">
			<button class="ui large green button" id="back-upper">Back</button>
			<button class="ui large green button" id="back-state">Back</button>
			<button class="ui large green button" id="back-lower">Back</button>			
		</div>

	</section> <!-- Search Everything END -->

	<div class="ui black inverted vertical footer-wide segment">
		<div class="ui three column container grid">
			<div class="column">
				<div class="ui vertical text container segment">
					<div class="ui list">
						<a class="item">What is a FAQ?</a>
						<a class="item">Who is our user?</a>
						<a class="item">Where is our office located?</a>
					</div>
				</div>
			</div>

			<div class="column">
				<div class="ui vertical center aligned segment">
					<a href="#">Under Opensource License GNU / GPL</a>
				</div>
			</div>

			<div class="column">
				<div class="ui vertical center aligned segment">
					<p>Mae Pay Soh Web Application</p>
					<p>Developed By Kode Addict Team</p>
				</div>
			</div>
		</div>
	</div> <!-- FOOTER END -->

@stop