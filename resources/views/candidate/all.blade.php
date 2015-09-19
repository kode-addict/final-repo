@extends('master')

@section('content')

	<div class="ui one column grid">

		@foreach($candidateList->data as $candidate)

			
			<div class="column">

			<br>

			<h2 class="ui header">{{ $candidate->name }}</h2>

			<img src="{{ $candidate->photo_url }}" class="ui bordered image candidateSmall">

			<i class="thumbs outline up icon"></i>

			<i class="thumbs outline down icon"></i>

			<br>

			<div class="ui divider"></div>		

			</div>


		@endforeach()

	</div>


		<div class="column" id="template">

			<br>

			<h2 class="ui header"></h2>

			<img class="ui bordered image candidateSmall">

			<i class="thumbs outline up icon"></i>

			<i class="thumbs outline down icon"></i>
			
			<br>

			<div class="ui divider"></div>		

		</div>

@stop