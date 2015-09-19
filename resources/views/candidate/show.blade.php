@extends('master')

@section('content')
	
	<br><br><br><br>

<div class="ui text container">

	<section class="about-candidate ui raised segment"> 
			<img class="ui small bordered rounded image candidate-img" src="{{ $candidate->data->photo_url }}">
			
			<div class="ui right aligned grid">
				<div class="ui right floated column">
					<button class="ui button">Watch</button>
					<button class="ui button">Review</button>									
				</div>
			</div><br><br>


			<div class="ui text container">
				<h3>{{ $candidate->data->name }}</h3>
				<p><i class="teal student icon"></i> Education : {{$candidate->data->education }}</p>
				<p><i class="teal suitcase icon"></i> Occupation : {{$candidate->data->occupation }}</p>
				<p><i class="teal mars stroke icon"></i> Gender : {{ $candidate->data->gender == 'M' ? 'male' : 'female' }}</p>				
				<p><i class="teal map pin icon"></i> Town : {{ $candidate->data->ward_village}}</p>				
				<p><i class="teal male icon"></i> Father : {{ $candidate->data->father->name}}</p>				
				<p><i class="teal female icon"></i> Mother : {{ $candidate->data->mother->name}}</p>				
				<p><i class="teal tag icon"></i> Asa : {{ $candidate->data->legislature}}</p>				

				<br>
			</div>

			<div>
				<i class="icon heart large up red"></i>
				<i class="icon thumbs large up blue"></i>

			</div>

		</section> <!-- Candidate Detail END -->
</div>
@stop