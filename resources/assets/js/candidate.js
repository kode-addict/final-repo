
new Vue ({

	el : '#candidate',

	data : {

		candidateId :'',

	},

	methods: {

		favorite : function(e,id){

			e.preventDefault();

		    this.$http.post('../favorite',{ candidate_id:id },function (data, status, request) {

		          // set data on vm
		          this.$set('someData', data)

		    }).error(function (data, status, request) {
		          
		          // handle error
		    })

		},
		like : function(e,id){

			e.preventDefault();

		    this.$http.post('../like',{ candidate_id:id },function (data, status, request) {

		          // set data on vm
		          this.$set('someData', data)

		    }).error(function (data, status, request) {
		          
		          // handle error
		    })

		}		

	},

});


Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');
