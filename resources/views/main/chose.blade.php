@extends('master')


@section('content')
<div class="ui grid">
	<div class="ui one column centered grid">
	

				<div class="ten wide computer column sixteen wide mobile">
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
						  	<button class="ui button green done">Done</button>
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
						  	<button class="ui button green done">Done</button>
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




			<div class="ten wide computer column sixteen wide mobile">
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
						  	<button class="ui button green done">Done</button>
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
						  	<button class="ui button green done">Done</button>
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




				<div class="ten wide computer column sixteen wide mobile">
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
						  	<button class="ui button green done">Done</button>
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

			<div class="ui raised segment text container">
				{{ Inspiring::quote() }}
			</div>
	</div>
</div>

@stop