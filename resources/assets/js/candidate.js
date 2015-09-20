
new Vue ({

	el : '#candidate',

	data : {

		candidateId :'',

	},

	methods: {

		like : function(e,id){

			e.preventDefault();

			var candidate_id=id

		    this.$http.post('../favorite', function (candidate_id, status, request) {

		          // set data on vm
		          this.$set('someData', data)

		    }).error(function (data, status, request) {
		          
		          // handle error
		    })

		}

	},

});


Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');
