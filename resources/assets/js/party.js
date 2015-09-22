$(document).ready(function(){


$('.container .content .ui.grid.infiniteParty')
  	
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

    			var nextlink=next.replace('?','');

	      		$.get(window.location.href+'?'+nextlink,function(datas){


					$.each(datas.data,function(key,value){		
						
						return buildCandidateList(value.id,value.party_name,value.party_seal,that);	

					});

					
					$('#paginate').val(datas._meta.links.next);
	      			

	      		},"json"); 
    		}    	
      		
    	}
  
  	});

  	function buildCandidateList(id,name,image,that){

  		var root=$('#template').clone();

      var url=$('#currentpartyurl').val()+'/'+id;

  		$(root).removeClass('hidden');

  		$(root).children('img').attr('src',image);

      $(root).find('.header a').attr('href',url).text(name);

  		return root.appendTo(that);

  	}



});


$(document).ready(function(){


new Vue ({

  el : '#party',

  data : {

    partyId :'',

    likes :0,

    liked: false,

    favorited: false,

  },

  methods: {

    favorite : function(e,id){

      e.preventDefault();

      var that=this;

        this.$http.post('../favoriteparty',{ party_id:id },function (data, status, request) {

            

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

        this.$http.post('../likeparty',{ party_id:id },function (data, status, request) {

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