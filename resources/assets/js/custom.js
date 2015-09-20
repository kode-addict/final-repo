$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name="_token"]').attr('content')
        }
    });
});

$('#step2').hide();

$('#step3').hide();


	$('#step1 .done').click(function() {

		$('#step1')

		  .transition('fade',function() {
		    	
		    	$('#step2').transition('fade');

		  });

		$('#step1header').addClass('grey');

		$('#step1header i').removeClass('hidden');

		$('#step2header').removeClass('grey');

		var statename=$('#step1 select').val();

		var select=$('#step2 select');

		$.ajax({
	    	
	    	type:"GET",

	    	url:'geo?st_name='+statename+'&no_geo=true',

	    	dataType:'json',
	    	
	    	beforeSend:function(data){ 
	    		$('#step2 .dimmer').addClass('active');
	    	},
	    	success:function(datas){
				
				select.children("option:not(:first-child)").remove();
				
				$.each(datas.data,function(key,value){		
					
					return buildOption(value.properties.DT,value.properties.DT_PCODE,select);	

				});	 
				   		
	        	$('#step2 .dimmer').removeClass('active');
	    	}
		});		

	});




	$('#step2 .done').click(function() {

		$('#step2')

		  .transition('fade',function() {
		    	
		    	$('#step3').transition('fade');

		  });

		$('#step2header i').removeClass('hidden');

		$('#step2header').addClass('grey');

		$('#step3header').removeClass('grey');

		var districtcode=$('#step2 select').val();		

		var select=$('#step3 select');



		$.ajax({
	    	
	    	type:"GET",

	    	url:'geo/lowerhouse?dt_pcode='+districtcode+'&no_geo=true',

	    	dataType:'json',
	    	
	    	beforeSend:function(data){ 
	    		$('#step3 .dimmer').addClass('active');
	    	},
	    	success:function(datas){
				
				select.children("option:not(:first-child)").remove();
				
				$.each(datas.data,function(key,value){		
					
					return buildOption(value.properties.TS,value.properties.TS_PCODE,select);	

				});	 
				   		
	        	$('#step3 .dimmer').removeClass('active');
	    	}
		});

	});


	$('#step2 .back').click(function() {

		$('#step2')

		  .transition('fade',function() {
		    		
		    		$('#step1').transition('fade');
		    	
		  });

		$('#step1header i').addClass('hidden');  

		$('#step2header').addClass('grey');

		$('#step1header').removeClass('grey');


	});


	$('#step3 .back').click(function(e) {

		e.preventDefault();

		$('#step3')

		  .transition('fade',function() {
		    		
		    		$('#step2').transition('fade');
		    	
		  });

		$('#step2header i').addClass('hidden');

		$('#step3header').addClass('grey');

		$('#step2header').removeClass('grey');


	});

	$('#step3 .done').click(function(e) {

		e.preventDefault();

		$('#step3header i').removeClass('hidden');

		$('#step3 form').submit();


	});

	function buildOption(name,code,select){
			

			var option=$('<option>').val(code).text(name);

			return option.appendTo(select);
	}



$('.container .content .ui.grid')
  	
  	.visibility({

    	once: true,
    	// update size when new content loads
    	observeChanges: true,
    	// load content on bottom edge visible
    	onBottomVisible: function() {

    		var that=$(this);

    	

	      		$.get(window.location.href+'&page=2',function(datas){

					$.each(datas.data,function(key,value){		
						
						return buildCandidateList(value.name,value.photo_url,that);	

					});	

	      		},"json"); 

    	
      		
    	}
  
  	});

  	function buildCandidateList(name,image,that){

  		var root=$('#template').clone();

  		$(root).children('.header').text(name);

  		$(root).children('img').attr('src',image);

  		return root.appendTo(that);

  	}







