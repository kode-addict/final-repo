@extends('master')

@section('content')

	@if(Request::has('party'))

		@if( !$candidateList->data == null)
		<h1 class="ui center aligned header"> <a ref="{{ url('party').'/'.$candidateList->data[0]->party->id }}"> {{ $candidateList->data[0]->party->party_name}} </a> </h1>
		@endIf

	@endIf

<div class="ui grid" >

		<!-- <div class="ui one column infiniteCandidate"> -->
	<div class="ui twelve wide computer column">

	<div class="ui infiniteCandidate">

		@foreach($candidateList->data as $candidate)
			<div class="ui text container">
				<section class="ui text container push-down">
					<div class="segments">
						<div class="ui raised segment">
							<div class="ui internally celled grid">
								<div class="row">
							      <div class="three wide column">
							        <img class="ui candidate image" src="{{ $candidate->photo_url }}">
							      </div>
							      <div class="ten wide column middle aligned">
							      		<h2 class="header"> 
							      			<a href="{{ route('candidate.show',$candidate->id) }}">{{ $candidate->name }}</a>
							      		</h2>
										<p>
											<i class="teal map pin icon"></i> 
											State : {{ $candidate->constituency->parent}}
										</p>
										@if( property_exists($candidate->party,'id') )
										<p>
											<i class="teal users icon"></i> Party : 
											<a href="{{ url('party').'/'.$candidate->party->id }}"> 
												{{ $candidate->party->party_name  }} 
											</a>
										</p>				
										@endif
							      </div>
							    </div>
						    </div>
				    	</div>
					</div>
				</section>
			</div>
		@endforeach

		<div class="ui text hidden" id="template">
			<section class="ui text container push-down">
				<div class="segments">
					<div class="ui raised segment">
						<div class="ui internally celled grid">
							<div class="row">
						      <div class="three wide column">
						        <img class="ui candidate image">
						      </div>
						      <div class="ten wide column middle aligned">
						      		<h2 class="header"> 
						      			<a></a>
						      		</h2>
									<p>
										<i class="teal map pin icon"></i> 
										State : <span class="state"></span>
									</p>
									<p>
										<i class="teal users icon"></i> Party :<a href="" class="party_link"> 
										<span class="party"></span>
										</a>
										 
							
									</p>				
						      </div>
						    </div>
					    </div>
			    	</div>
				</div>
			</section>
		</div>

	</div>

		<!-- </div> -->
</div><!-- end 12-->

	@if(Request::has('legislature'))

	@if(!$candidateList->data==null)
	<div class="ui four wide computer column " id="rank">
		
		<div class="ui sticky">
			
			<h3>{{ $candidateList->data[0]->constituency->name}} {{$candidateList->data[0]->legislature}} ko sar lal laung myar</h3>
			<h3>Rank Score</h3>

			<div class="ui middle aligned selection list"  v-repeat="candidate in topLocalCandidates | orderBy 'like' -1 " >
			  
			  	<div class="item">
			    
			    	<img class="ui avatar image" src="@{{ candidate.photo_url }}">
			    
			    	<div class="content">
			      		<div class="header"> <a href=" {{ url('/candidate')}}@{{ '/'+candidate.id }}"> @{{ candidate.name }} </a></div>
			         	<div class="description"> <p>@{{ candidate.like }} @{{ candidate.like | pluralize 'vote' }}</p> </div>
			    	</div>

			  	</div>

			</div>
		</div>
	</div>
	@endIf
	@endIf

</div>


		<input type="hidden" id="currentcandidateurl" value="{{ url('candidate') }}">
		<input type="hidden" id="partyurl" value="{{ url('party') }}">

		@if( $candidateList->meta->pagination->total_pages > 1)

				<input class="hidden" id="paginate" value="{{ $candidateList->meta->pagination->links->next }}">

		@endIf


<script type="text/javascript">
	
	$(document).ready(function(){

		new Vue({
			
			el : '#rank',

			data : {

				candidates : {!! json_encode($candidateList->data) !!}

			},
			computed: {

			    topLocalCandidates: function () {

			      return this.candidates.splice(0,5);

			    }

			}

		});


$('.ui.sticky')
  .sticky({
  	offset       : 80,
    context: '#content'
  });

	});

</script>
@stop