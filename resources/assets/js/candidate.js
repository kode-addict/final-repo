$(document).ready(function(){


new Vue ({

	el : '#candidate',

	data : {

		candidateId :'',

		likes :0,

		liked: false,

		favorited: false,

	},

	methods: {

		favorite : function(e,id){

			e.preventDefault();

			var that=this;

		    this.$http.post('../favorite',{ candidate_id:id },function (data, status, request) {

		        

		    }).success(function (data, status, request) {
		          

		          if(data.result=='destroyed'){

		          	that.favorited=false;

		          }

		          if(data.result=='created'){

		          	that.favorited=true;

		          }		          

		    });

		},
		like : function(e,id){

			e.preventDefault();

		    this.$http.post('../like',{ candidate_id:id },function (data, status, request) {

		    	  var that=this;

		    	  var like=parseInt(that.likes);


		          if(data.result=='destroyed'){

		          	that.likes=like-1;

		          	that.liked=false;

		          }
		          if(data.result=='created'){

		          	that.likes=like+1;

		          	that.liked=true;

		          }

		    }).error(function (data, status, request) {
		          
		          // handle error
		    })

		}				

	},

});


Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

});