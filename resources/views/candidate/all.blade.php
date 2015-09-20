@extends('master')

@section('content')

	<div class="ui one column grid">

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

			<h2 class="ui header"></h2>

			<img class="ui bordered image candidateSmall">

			<i class="thumbs outline up icon"></i>

			<i class="thumbs outline down icon"></i>
			
			<br>

			<div class="ui divider"></div>		

		</div>


		@if( $candidateList->meta->pagination->total_pages > 1)

				<input class="hidden" id="paginate" value="{{ $candidateList->meta->pagination->links->next }}">

		@endIf

@stop