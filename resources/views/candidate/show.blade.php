@extends('master')

@section('content')
	
	<br>

<div class="ui text container">
	
	@if( property_exists($candidate->data->party,'id') )

	<a href="{{ url('party').'/'.$candidate->data->party->id }}" class="partyTimelineAtag"><img src="{{ $candidate->data->party->party_flag }}" class="partyTimeline"></a>
	@else
		<br><br><br><br>
	@endIf

	<section class="about-candidate ui raised segment" id="candidate"> 
			
			<img class="ui small bordered rounded image candidate-img" src="{{ $candidate->data->photo_url }}">
			<div class="ui right aligned grid">
				
				<div class="ui right floated column">
					<div class="ui button">Compare with#</div>
					<div class="ui flowing popup top left transition hidden">
					  <div class="ui three column grid center aligned ">
					    <div v-repeat="char in compare" class="column">
					    <div class="column ">
					      <img class="ui avatar image middle aligned" src="@{{ char.photo_url }}">
					      <h4 class="ui header"> @{{ char.name }} </h4>
					      
					      <a class="ui button" href=" {{ url() }} ">Compare</a>
					    </div>
					    </div>
					  </div>
					</div>										
				</div>

			</div><br><br>

			<input v-show="false" v-model="legislature" value="{{ $candidate->data->legislature }}">

			<input v-show="false" v-model="amcode" value="{{ $candidate->data->constituency->AM_PCODE }}">

			<input v-show="false" v-model="tspcode" value="{{ $candidate->data->constituency->TS_PCODE }}">

			<input v-show="false" v-model="cnumber" value="{{ $candidate->data->constituency->number }}">

			<input v-show="false" v-model="likes" value="{{ $likes }}">

 			<input v-show="false" v-model="candidateId" value="{{ $candidate->data->id}}">

 			<div class="ui text container">
				<h3>{{ $candidate->data->name }}</h3>							
				<?php $date=$candidate->data->birthdate; $birthdate=Carbon\Carbon::createFromTimestamp($date) ?>
				<p><i class="teal tag icon"></i> BirthDate : {{ $birthdate->toDateString() }} </p>
				<p><i class="teal student icon"></i> Education : {{$candidate->data->education }}</p>
				<p><i class="teal suitcase icon"></i> Occupation : {{$candidate->data->occupation }}</p>
				<p><i class="teal mars stroke icon"></i> Gender : {{ $candidate->data->gender == 'M' ? 'male' : 'female' }}</p>				
				<p><i class="teal map pin icon"></i> Town : {{ $candidate->data->ward_village}}</p>				
				<p><i class="teal male icon"></i> Father : {{ $candidate->data->father->name}}</p>
				<p><i class="teal male icon"></i> Father Religion : {{ $candidate->data->father->religion}}</p>				
				<p><i class="teal female icon"></i> Mother : {{ $candidate->data->mother->name}}</p>
				<p><i class="teal male icon"></i> Mother Religion : {{ $candidate->data->mother->religion}}</p>				
				<p><i class="teal tag icon"></i> legislature : {{ $candidate->data->legislature}} </p>
				<p><i class="teal tag icon"></i> ethnicity : {{ $candidate->data->ethnicity}}</p>
				<p><i class="teal tag icon"></i> Constituency : {{ $candidate->data->constituency->name}} {{ $candidate->data->constituency->number}}</p>
				<p><i class="teal tag icon"></i> State : {{ $candidate->data->constituency->parent}}</p>

				@if( property_exists($candidate->data->party,'id') )
				<p>
					<i class="teal tag icon"></i> Party : 
					<a href="{{ url('party').'/'.$candidate->data->party->id }}"> 
						{{ $candidate->data->party->party_name  }} 
					</a>
				</p>				
				@endIf
				<br>
			</div>
			<div>

				@if(Auth::check())

					@if(auth()->user()->checkFavoriteCandidate($candidate->data->id))

						<input class="hidden" v-model="favorited" value="true">
						
						<a v-on="click : favorite($event,candidateId)"><i class="icon heart large up favoritebtn" v-class="red:favorited"></i></a>
					
					@else

						<a v-on="click : favorite($event,candidateId)"><i class="icon heart large up favoritebtn" v-class="red:favorited"></i></a>

					@endIf

				@endIf

				<span>@{{ likes }} votes</span>

				@if(Auth::check()) 

					@if(auth()->user()->checkLikeCandidate($candidate->data->id))

						<input class="hidden" v-model="liked" value="true">
						<a v-on="click : like($event,candidateId)"> <i class="icon thumbs likebtn large up" v-class="blue:liked"></i></a>
					@else

						<a v-on="click : like($event,candidateId)"> <i class="icon thumbs likebtn large up" v-class="blue:liked"></i></a>
					
					@endIf


				@endIf

			</div>


		</section> <!-- Candidate Detail END -->

	
   <div class="fb-share-button" 
        data-href="{{ Request::url() }}" 
        data-layout="button_count">
    </div>
		
	<div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5" width="100%"></div>
</div>
	

	
	<br><br>
@stop