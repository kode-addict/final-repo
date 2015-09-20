
new Vue ({

	el : '#candidate',

	data : {

		candidateId :'',

		likes :0,

	},

	methods: {

		favorite : function(e,id){

			e.preventDefault();

			var that=this;

		    this.$http.post('../favorite',{ candidate_id:id },function (data, status, request) {

		        

		    }).success(function (data, status, request) {
		          
		          if(data.result=='destroyed'){

		          	that.likes=that.likes-1;

		          }

		          if(data.result=='created'){

		          	that.likes=that.likes-1;

		          }		          

		    });

		},
		like : function(e,id){

			e.preventDefault();

		    this.$http.post('../like',{ candidate_id:id },function (data, status, request) {

		    	  var that=this;

		          if(data.result=='destroyed'){

		          	that.likes=that.likes-1;

		          }
		          if(data.result=='created'){

		          	that.likes=that.likes+1;

		          }

		    }).error(function (data, status, request) {
		          
		          // handle error
		    })

		}				

	},

});


Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');
