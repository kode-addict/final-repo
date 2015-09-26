@extends('master')

@section('content')

<div id="favorite" >

	<h2>Favorite Candidate</h2>

	<div class="ui four column grid">

		<div v-repeat="user in favors" class="column">

			<h4 > <a href="{{ url('/candidate').'/'}}@{{ user.id}}"> @{{ user.name }}</a> </h4> 

			<img src="@{{ user.photo_url }}" class="ui small bordered rounded image ">

		</div>

	</div>

	<h2>Favorite Party</h2>

	<div class="ui four column grid">

		<div v-repeat="party in parties" class="column">

			<h4 > <a href="{{ url('/party').'/'}}@{{ party.id}}"> @{{ party.party_name }}</a> </h4> 

			<img src="@{{ party.party_seal }}" class="ui bordered rounded image favoriteimage">

		</div>

	</div>

</div>



<script type="text/javascript">
	
(function() {

new Vue ({

	el : '#favorite',

	data : {

		favoritecandidatelist :{!! $favoritecandidatelist !!},

		favoritepartylist : {!! $favoritepartylist !!},

		favors:[],

		parties:[],

	},

	ready: function() {

		var that=this;

        this.favoritecandidatelist.forEach(function(value){
           

			that.$http.get('../candidate/'+value.candidate_id,function (data, status, request) {

			    that.favors.push(data.data);

			 });


        });


        this.favoritepartylist.forEach(function(value){

           

			that.$http.get('../party/'+value.party_id,function (data, status, request) {

			    that.parties.push(data.data);

			 });

			console.log(that.parties);


        });

		}
	});



})();


</script>
@stop

