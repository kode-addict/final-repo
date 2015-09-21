@extends('master')

@section('content')

<div id="favorite">

	
</div>



<script >

(function() {

new Vue ({

	el : '#favorite',

	data : {

		favoritelist :{!! $favorites !!},

	},

	ready: function() {

		var that=this;

        this.favoritelist.forEach(function(value){
           

			that.$http.get('../candidate/'+value.candidate_id,function (data, status, request) {

			    console.log(data);

			});

        });


	}


});


})();

</script>


@stop

