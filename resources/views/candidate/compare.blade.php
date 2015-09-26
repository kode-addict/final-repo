@extends('master')

@section('content')
<br><br><br><br>
<div class="main container">

	<div class="ui two column grid segment">
	  <div class="column">

 			<div class="ui text container">
			<img class="ui small bordered rounded image candidate-img" src="{{ $person->data->photo_url }}">
				<br><br><br>
				<h3>{{ $person->data->name }}</h3>	

				<?php $date=$person->data->birthdate; $birthdate=Carbon\Carbon::createFromTimestamp($date) ?>
				<p><i class="teal tag icon"></i> BirthDate : {{ $birthdate->toDateString() }} </p>
				<p><i class="teal student icon"></i> Education : {{$person->data->education }}</p>
				<p><i class="teal suitcase icon"></i> Occupation : {{$person->data->occupation }}</p>
				<p><i class="teal mars stroke icon"></i> Gender : {{ $person->data->gender == 'M' ? 'male' : 'female' }}</p>				
				<p><i class="teal map pin icon"></i> Town : {{ $person->data->ward_village}}</p>				
				<p><i class="teal male icon"></i> Father : {{ $person->data->father->name}}</p>
				<p><i class="teal male icon"></i> Father Religion : {{ $person->data->father->religion}}</p>				
				<p><i class="teal female icon"></i> Mother : {{ $person->data->mother->name}}</p>
				<p><i class="teal male icon"></i> Mother Religion : {{ $person->data->mother->religion}}</p>				
				<p><i class="teal tag icon"></i> legislature : {{ $person->data->legislature}} </p>
				<p><i class="teal tag icon"></i> ethnicity : {{ $person->data->ethnicity}}</p>
				<p><i class="teal tag icon"></i> Constituency : {{ $person->data->constituency->name}} {{ $person->data->constituency->number}}</p>
				<p><i class="teal tag icon"></i> State : {{ $person->data->constituency->parent}}</p>

				@if( property_exists($person->data->party,'id') )
				<p>
					<i class="teal tag icon"></i> Party : 
					<a href="{{ url('party').'/'.$person->data->party->id }}"> 
						{{ $person->data->party->party_name  }} 
					</a>
				</p>				
				@endIf
				<br>
			</div>
	  </div>
	  <div class="ui vertical divider">
	    VS
	  </div>
	  <div class="column">
			<div class="ui text container right ">

				<img class="ui small bordered rounded image candidate-img" src="{{ $person1->data->photo_url }}">
				<br><br><br>
				<h3>{{ $person1->data->name }}</h3>							

				<?php $date=$person->data->birthdate; $birthdate=Carbon\Carbon::createFromTimestamp($date) ?>
				<p><i class="teal tag icon"></i> BirthDate : {{ $birthdate->toDateString() }} </p>
				<p><i class="teal student icon"></i> Education : {{$person1->data->education }}</p>
				<p><i class="teal suitcase icon"></i> Occupation : {{$person1->data->occupation }}</p>
				<p><i class="teal mars stroke icon"></i> Gender : {{ $person1->data->gender == 'M' ? 'male' : 'female' }}</p>				
				<p><i class="teal map pin icon"></i> Town : {{ $person1->data->ward_village}}</p>				
				<p><i class="teal male icon"></i> Father : {{ $person1->data->father->name}}</p>
				<p><i class="teal male icon"></i> Father Religion : {{ $person1->data->father->religion}}</p>				
				<p><i class="teal female icon"></i> Mother : {{ $person1->data->mother->name}}</p>
				<p><i class="teal male icon"></i> Mother Religion : {{ $person1->data->mother->religion}}</p>				
				<p><i class="teal tag icon"></i> legislature : {{ $person1->data->legislature}} </p>
				<p><i class="teal tag icon"></i> ethnicity : {{ $person1->data->ethnicity}}</p>
				<p><i class="teal tag icon"></i> Constituency : {{ $person1->data->constituency->name}} {{ $person->data->constituency->number}}</p>
				<p><i class="teal tag icon"></i> State : {{ $person1->data->constituency->parent}}</p>

				@if( property_exists($person1->data->party,'id') )
				<p>
					<i class="teal tag icon"></i> Party : 
					<a href="{{ url('party').'/'.$person1->data->party->id }}"> 
						{{ $person1->data->party->party_name  }} 
					</a>
				</p>				
				@endIf
				<br>
			</div>	  
	  </div>

</div>

@endsection