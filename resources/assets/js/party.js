$(document).ready(function(){


$('.container .content .ui.infiniteParty')
    
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
            
            return buildPartyList(value.id,value.party_name,value.party_seal,value.chairman,value.leadership,value.headquarters,that);  

          });

          
          $('#paginate').val(datas._meta.links.next);
              

            },"json"); 
        }     
          
      }
  
    });

    function buildPartyList(id,name,image,chairman,leadership,address,that){

      var root=$('#template').clone();

      var url=$('#currentpartyurl').val()+'/'+id;

      $(root).removeClass('hidden');

      $(root).find('img').attr('src',image);
      
      $(root).find('.leadership').text(leadership); 

      $(root).find('.party_address').text(address); 

      $(root).find('.chairman').text(chairman);

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