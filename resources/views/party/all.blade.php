@extends('master')

@section('content')

<div class="ui grid" id="content">

	<div class="ui thirteen wide computer column">


		<div class="ui infiniteParty">

			@foreach($partyList->data as $party)
			<div class="ui text container">
				<section class="ui text container push-down">
					<div class="segments">
						<div class="ui raised segment">
							<div class="ui internally celled grid">
								<div class="row">
									<div class="three wide column">
										<img class="ui image" src="{{ $party->party_seal }}">
									</div>
									<div class="ten wide column middle aligned">
										<h2 class="header">
											<a href="{{ route('party.show',$party->id) }}">{{ $party->party_name }} {{ $party->abbreviation ?: ''}}</a>
										</h2>
										<p><i class="teal suitcase icon"></i> Leadership :
											@foreach($party->leadership as $leadership)
											{{$leadership }},
											@endforeach
										</p>
										<p><i class="teal suitcase icon"></i> Chairman :
											@foreach($party->chairman as $chairman)
											{{$chairman }},
											@endforeach
										</p>	
										<p><i class="teal map pin icon"></i> Party Address : {{ $party->headquarters}}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			@endforeach()

		</div>
	</div>

	<div class="ui three wide computer column" id="rankparty">

	<div style="position: fixed; top: 80px; left: 30;">

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

<div class="ui text hidden" id="template">
	<section class="ui text container push-down">
		<div class="segments">
			<div class="ui raised segment">
				<div class="ui internally celled grid">
					<div class="row">
						<div class="three wide column">
							<img class="ui image">
						</div>
						<div class="ten wide column middle aligned">
							<h2 class="header">
								<a></a>
							</h2>
							<p><i class="teal suitcase icon"></i> 
								Leadership : <span class="leadership"></span>
							</p>
							<p><i class="teal suitcase icon"></i> 
								Chairman : <span class="chairman"></span>
							</p>	
							<p><i class="teal map pin icon"></i> 
								Party Address : <span class="party_address"></span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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