@extends('master')

@section('content')

<div class="ui grid" id="content">
	

	<div class="ui twelve wide computer column">


		<div class="ui one column grid infiniteParty">

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
	</div>

		<div class="ui four wide computer column" id="rankparty">

			<div class="ui sticky">

				<h3>Popular Party</h3>
				<br>
				<div class="ui four column grid">

					<div class="ui middle aligned selection list"  v-repeat="party in parties | orderBy 'count' -1 ">
					  
					  	<div class="item">
					    
					    	<img class="ui avatar image" src="@{{ party.party_seal }}">
					    
					    	<div class="content right">
					      		<div class="header"> <a href=" {{ url('/party')}}@{{ '/'+party.id }}"> @{{ party.party_name }} </a></div>
					         	<div class="description"> <p>@{{ party.count }} @{{ party.count | pluralize 'vote'}}</p> </div>
					    	</div>

					  	</div>

					</div>

				</div>
			</div>

		</div>
</div>

		<div class="column hidden" id="template">

			<br>

			<h2 class="ui header"><a href=""> </a></h2>

			<img class="ui bordered image candidateSmall">

			<i class="thumbs outline up icon"></i>

			<i class="thumbs outline down icon"></i>
			
			<br>

			<div class="ui divider"></div>		

		</div>

		<input type="hidden" id="currentpartyurl" value="{{ url('/party') }}">

		@if( $partyList->_meta->total_pages > 1)

				<input class="hidden" id="paginate" value="{{ $partyList->_meta->links->next }}">

		@endIf








<script type="text/javascript">
	
(function() {

new Vue ({

	el : '#rankparty',

	data : {


		popularParty : {!! $popularParty !!},

		parties:[],

	},

	ready: function() {

		var that=this;


        this.popularParty.forEach(function(value){

           

			that.$http.get('party/'+value.party_id,function (data, status, request) {
				
				data.data.count=value.count;

			    that.parties.push(data.data);

			 });

			console.log(that.parties);


        });

		}
	});

	$('#rankparty .ui.sticky')
	  .sticky({
	  	offset       : 100,
	    context: '#content'
	  });

})();


</script>




@stop