@extends('master')

@section('content')
	
	<br><br><br><br>

<div class="ui text container">

	<section class="about-candidate ui raised segment"> 
			<img class="ui small bordered rounded image party-img" src="{{ $party->data->party_seal }}">
			
			<div class="ui right aligned grid">
				<div class="ui right floated column">
					<button class="ui button">Watch</button>
					<button class="ui button">Review</button>									
				</div>
			</div><br><br>


			<div class="ui text container">
				<h3>{{ $party->data->party_name_english }}</h3>
				<p><i class="teal student icon"></i> Members : {{$party->data->member_count }}</p>
				<p><i class="teal suitcase icon"></i> Leadership : {{$party->data->leadership[0] }}</p>
				<p><i class="teal map pin icon"></i> Party Address : {{ $party->data->headquarters}}</p>				
				<p><i class="teal map icon"></i> Region : {{ $party->data->region}}</p>				

				<br>
			</div>

			<div>
				<i class="icon heart large up red"></i>
				<i class="icon thumbs large up blue"></i>

			</div>

		</section> <!-- Candidate Detail END -->
</div>
@stop