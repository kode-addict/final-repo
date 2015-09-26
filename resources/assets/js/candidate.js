$(document).ready(function(){


$('.button')
  .popup({
		hoverable: true,
  })
;

new Vue ({

	el : '#candidate',

	data : {

		candidateId :'',

		likes :0,

		liked: false,

		favorited: false,

		legislature:'',

		amcode: '',

		tspcode: '',

		cnumber: 0,

		compare:[],

	},
	
	ready: function() {

			var place;

			console.log(this.tspcode+'hihi');

			if(this.amcode==null){
				
				data={ constituency_am_pcode:this.amcode ,legislature:this.legislature,constituency_number:this.cnumber };
			}
			else if(this.legislature=='ပြည်သူ့လွှတ်တော်'){

				data={ constituency_ts_pcode:this.tspcode , legislature:this.legislature};
			}

			else{

				data={ constituency_ts_pcode:this.tspcode , legislature:'state_region',constituency_number:this.cnumber};
			}

			var that=this;
	},
	ready: function() {

			var place;

			if(this.amcode==''){
				
				data={ constituency_ts_pcode:this.tspcode , legislature:this.legislature,constituency_number :this.cnumber};
			}
			else{

				data={ constituency_am_pcode:this.amcode ,legislature:this.legislature,constituency_number:this.cnumber };
			}

			var that=this;

		    this.$http.get('../candidate',data,function (data, status, request) {

				data.data.forEach(function(value){
					
					if(value.id!=that.candidateId){

						that.compare.push(value);
					}

				});


		    }).error(function (data, status, request) {
		          
		          // handle error
		    })		

	},

					that.compare.push(value);

				});


		    }).error(function (data, status, request) {
		          
		          // handle error
		    })		

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

		},
		compare : function(e){

			alert('hi');

		}				

	},

});


Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');







$('.container .content .ui.grid.infiniteCandidate')
  	
  	.visibility({

    	once: false,
    	// update size when new content loads
    	observeChanges: true,
    	// load content on bottom edge visible
    	onBottomVisible: function() {

    		var that=$(this);

    		var next=$('#paginate').val();

    		console.log(next);

    		if(next!=null && next!=''){

    			var nextlink=next.replace('/?','');

	      		$.get(window.location.href+'&'+nextlink,function(datas){


					$.each(datas.data,function(key,value){		
						
						return buildCandidateList(value.id,value.name,value.photo_url,that);	

					});

					
					$('#paginate').val(datas.meta.pagination.links.next);
	      			

	      		},"json"); 
    		}    	
      		
    	}
  
  	});

  	function buildCandidateList(id,name,image,that){

  		var root=$('#template').clone();

  		var url=$('#currentcandidateurl').val()+'/'+id;

  		$(root).removeClass('hidden');

  		$(root).children('img').attr('src',image);

  		$(root).find('.header a').attr('href',url).text(name);

  		return root.appendTo(that);

  	}





});