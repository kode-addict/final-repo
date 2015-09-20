@extends('master')

@section('content')

<div id="favorite">
	{{ $favorites[0] }}
</div>

<script >


new Vue ({

	el : '#favorite',

	data : {

		candidateId :"{{ json_decode($favorites) }}",

	},

	ready: function() {


		console.log(this.candidateId);

		var that=this;
		
		this.$http.get('../candidate/'+id,function (data, status, request) {

		    // set data on vm
		    this.$set('someData', data)

		})
	}


});



</script>


@stop

