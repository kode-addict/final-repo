@extends('master')

@section('content')
	
	<br>

<div class="ui text container" id="party">
	<a href="{{ url('party').'/'.$party->data->id }}" class="partyTimelineAtag"><img src="{{ $party->data->party_flag }}" class="partyTimeline"></a>

	<section class="about-candidate ui raised segment"> 
			<img class="ui small bordered rounded image party-img" src="{{ $party->data->party_seal }}">
			
			<div class="ui right aligned grid">
				<div class="ui right floated column">
					<button class="ui button">Watch</button>
					<button class="ui button">Review</button>									
				</div>
			</div><br><br>
			<input v-show="false" v-model="likes" value="{{ $likes }}">

 			<input v-show="false" v-model="partyId" value="{{ $party->data->id}}">

			<div class="ui text container">
				<h3>{{ $party->data->party_name_english }}</h3>
				<p><i class="teal student icon"></i> Members : {{$party->data->member_count }}</p>
				<p><i class="teal suitcase icon"></i> Leadership : {{$party->data->leadership[0] }}</p>
				<p><i class="teal map pin icon"></i> Party Address : {{ $party->data->headquarters}}</p>				
				<p><i class="teal map icon"></i> Region : {{ $party->data->region}}</p>			
				<a href='{{ route('candidate.index') ."?party=".$party->data->id }}'> See members </a>
				<br>
			</div>

			<div>

				@if(Auth::check())

					@if(auth()->user()->checkFavoriteParty($party->data->id))

						<input class="hidden" v-model="favorited" value="true">
						
						<a v-on="click : favorite($event,partyId)"><i class="icon heart large up favoritebtn" v-class="red:favorited"></i></a>
					
					@else

						<a v-on="click : favorite($event,partyId)"><i class="icon heart large up favoritebtn" v-class="red:favorited"></i></a>

					@endIf

				@endIf

				<span>@{{ likes }} likes</span>

				@if(Auth::check()) 

					@if(auth()->user()->checkLikeParty($party->data->id))

						<input class="hidden" v-model="liked" value="true">
						<a v-on="click : like($event,partyId)"> <i class="icon thumbs likebtn large up" v-class="blue:liked"></i></a>
					@else

						<a v-on="click : like($event,partyId)"> <i class="icon thumbs likebtn large up" v-class="blue:liked"></i></a>
					
					@endIf


				@endIf

			</div>

		</section> <!-- Candidate Detail END -->

</div>
<br><br>
@stop