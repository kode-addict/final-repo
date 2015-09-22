@extends('master')

@section('content')
	
	<br>

<div class="ui text container">
	<a href="{{ url('party').'/'.$candidate->data->party->id }}" class="partyTimelineAtag"><img src="{{ $candidate->data->party->party_flag }}" class="partyTimeline"></a>
	<section class="about-candidate ui raised segment" id="candidate"> 
			<img class="ui small bordered rounded image candidate-img" src="{{ $candidate->data->photo_url }}">
			<div class="ui right aligned grid">
				<div class="ui right floated column">
					<button class="ui button">Watch</button>
					<button class="ui button">Review</button>									
				</div>
			</div><br><br>

			<input v-show="false" v-model="likes" value="{{ $likes }}">

 			<input v-show="false" v-model="candidateId" value="{{ $candidate->data->id}}">

 			<div class="ui text container">
				<h3>{{ $candidate->data->name }}</h3>
				<p><i class="teal student icon"></i> Education : {{$candidate->data->education }}</p>
				<p><i class="teal suitcase icon"></i> Occupation : {{$candidate->data->occupation }}</p>
				<p><i class="teal mars stroke icon"></i> Gender : {{ $candidate->data->gender == 'M' ? 'male' : 'female' }}</p>				
				<p><i class="teal map pin icon"></i> Town : {{ $candidate->data->ward_village}}</p>				
				<p><i class="teal male icon"></i> Father : {{ $candidate->data->father->name}}</p>				
				<p><i class="teal female icon"></i> Mother : {{ $candidate->data->mother->name}}</p>				
				<p><i class="teal tag icon"></i> Asa : {{ $candidate->data->legislature}}</p>
				<p>
					<i class="teal tag icon"></i> Party : 
					<a href="{{ url('party').'/'.$candidate->data->party->id }}"> 
						{{ $candidate->data->party->party_name  }} 
					</a>
				</p>				

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

				<span>@{{ likes }} likes</span>

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
</div>

	
	<br><br>
@stop