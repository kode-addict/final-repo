@extends('master')

@section('content')


	@if(Request::has('party'))

		@if( !$candidateList->data == null)
		<h1> <a href="{{ url('party').'/'.$candidateList->data[0]->party->id }}"> {{ $candidateList->data[0]->party->party_name}} </a> </h1>
		@endIf
	@endIf

	<div class="ui one column grid infiniteCandidate">

		@foreach($candidateList->data as $candidate)

			
			<div class="column">

			<br>

			<h2 class="ui header"><a href="{{ route('candidate.show',$candidate->id) }}">{{ $candidate->name }} </a></h2>

			<img src="{{ $candidate->photo_url }}" class="ui bordered image candidateSmall">

			<i class="thumbs outline up icon"></i>

			<i class="thumbs outline down icon"></i>

			<br>

			<div class="ui divider"></div>		

			</div>


		@endforeach()

	</div>


		<div class="column hidden" id="template">

			<br>

			<h2 class="ui header"><a></a></h2>

			<img class="ui bordered image candidateSmall">

			<i class="thumbs outline up icon"></i>

			<i class="thumbs outline down icon"></i>
			
			<br>

			<div class="ui divider"></div>		

		</div>

		<input type="hidden" id="currentcandidateurl" value="{{ url('/candidate') }}">

		@if( $candidateList->meta->pagination->total_pages > 1)

				<input class="hidden" id="paginate" value="{{ $candidateList->meta->pagination->links->next }}">

		@endIf

@stop