@extends('master')

@section('content')

	<div class="ui one column grid infinite">

		@foreach($partyList->data as $party)

			
			<div class="column">

			<br>

			<h2 class="ui header"><a href="{{ route('party.show',$party->id) }}">{{ $party->party_name }} </a></h2>

			<img src="{{ $party->party_seal }}" class="ui bordered image candidateSmall">

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


		@if( $partyList->_meta->total_pages > 1)

				<input class="hidden" id="paginate" value="{{ $partyList->_meta->links->next }}">

		@endIf

@stop