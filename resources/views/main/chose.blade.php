@extends('master')


@section('content')
<div class="ui grid">
	<div class="ui one column centered grid">
		
		<div class="ten wide computer column sixteen wide mobile">

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
						    <option value="Ayeyarwaddy">Ayeyarwaddy</option>
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

					  	<button class="ui button green back">Back</button>
					  	<button class="ui button green done">Search</button>

				  	</form>
				</div>
				<div class="ui active inverted dimmer">
				    <div class="ui text loader">Loading</div>
				</div>
			</div>			
		</div><!-- end segment-->


			<div class="ui raised segment text container">
				{{ Inspiring::quote() }}
			</div>
	</div>
</div>

@stop