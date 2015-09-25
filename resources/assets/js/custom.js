$(document).ready(function(){





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




$('#statestep2').hide();

$('#statestep3').hide();


	$('#statestep1 .done').click(function() {

		$('#statestep1')

		  .transition('fade',function() {
		    	
		    	$('#statestep2').transition('fade');

		  });

		$('#statestep1header').addClass('grey');

		$('#statestep1header i').removeClass('hidden');

		$('#statestep2header').removeClass('grey');

		var statename=$('#statestep1 select').val();

		var select=$('#statestep2 select');

		$.ajax({
	    	
	    	type:"GET",

	    	url:'geo?st_name='+statename+'&no_geo=true',

	    	dataType:'json',
	    	
	    	beforeSend:function(data){ 
	    		$('#statestep2 .dimmer').addClass('active');
	    	},
	    	success:function(datas){
				
				select.children("option:not(:first-child)").remove();
				
				$.each(datas.data,function(key,value){		
					
					return buildOption(value.properties.DT,value.properties.DT_PCODE,select);	

				});	 
				   		
	        	$('#statestep2 .dimmer').removeClass('active');
	    	}
		});		

	});




	$('#statestep2 .done').click(function() {

		$('#statestep2')

		  .transition('fade',function() {
		    	
		    	$('#statestep3').transition('fade');

		  });

		$('#statestep2header i').removeClass('hidden');

		$('#statestep2header').addClass('grey');

		$('#statestep3header').removeClass('grey');

		var districtcode=$('#statestep2 select').val();		

		var select=$('#statestep3 select');



		$.ajax({
	    	
	    	type:"GET",

	    	url:'geo/lowerhouse?dt_pcode='+districtcode+'&no_geo=true',

	    	dataType:'json',
	    	
	    	beforeSend:function(data){ 
	    		$('#statestep3 .dimmer').addClass('active');
	    	},
	    	success:function(datas){
				
				select.children("option:not(:first-child)").remove();
				
				$.each(datas.data,function(key,value){		
					
					return buildOption(value.properties.TS,value.properties.TS_PCODE,select);	

				});	 
				   		
	        	$('#statestep3 .dimmer').removeClass('active');
	    	}
		});

	});


	$('#statestep2 .back').click(function() {

		$('#statestep2')

		  .transition('fade',function() {
		    		
		    		$('#statestep1').transition('fade');
		    	
		  });

		$('#statestep1header i').addClass('hidden');  

		$('#statestep2header').addClass('grey');

		$('#statestep1header').removeClass('grey');


	});


	$('#statestep3 .back').click(function(e) {

		e.preventDefault();

		$('#statestep3')

		  .transition('fade',function() {
		    		
		    		$('#statestep2').transition('fade');
		    	
		  });

		$('#statestep2header i').addClass('hidden');

		$('#statestep3header').addClass('grey');

		$('#statestep2header').removeClass('grey');


	});

	$('#statestep3 .done').click(function(e) {

		e.preventDefault();

		$('#statestep3header i').removeClass('hidden');

		$('#statestep3 form').submit();


	});

	function buildOption(name,code,select){
			

			var option=$('<option>').val(code).text(name);

			return option.appendTo(select);
	}










$('#upperstep2').hide();




	$('#upperstep1 .done').click(function() {

		$('#upperstep1')

		  .transition('fade',function() {
		    	
		    	$('#upperstep2').transition('fade');

		  });

		$('#upperstep1header').addClass('grey');

		$('#upperstep1header i').removeClass('hidden');

		$('#upperstep2header').removeClass('grey');

		var statename=$('#upperstep1 select').val();

		var select=$('#upperstep2 select');

		$.ajax({
	    	
	    	type:"GET",

	    	url:'geo/upperhouse?st_name='+statename+'&no_geo=true',

	    	dataType:'json',
	    	
	    	beforeSend:function(data){ 
	    		$('#upperstep2 .dimmer').addClass('active');
	    	},
	    	success:function(datas){
				console.log(datas);
				select.children("option:not(:first-child)").remove();
				
				$.each(datas.data,function(key,value){		
					
					return buildOptionUpper(value.properties.constituency_name_en,value.properties.constituency_number,value.properties.AM_PCODE,select);	

				});	 
				   		
	        	$('#upperstep2 .dimmer').removeClass('active');
	    	}
		});		

	});




	$('#upperstep2 .back').click(function(e) {

		e.preventDefault();

		$('#upperstep2')

		  .transition('fade',function() {
		    		
		    		$('#upperstep1').transition('fade');
		    	
		  });

		$('#upperstep1header i').addClass('hidden');  

		$('#upperstep2header').addClass('grey');

		$('#upperstep1header').removeClass('grey');


	});




	$('#upperstep2 .done').click(function(e) {

		e.preventDefault();

		$('#upperstep2header i').removeClass('hidden');

		$('#upperstep2 form').submit();


	});

	function buildOptionUpper(name,number,code,select){
			

			var option=$('<option>').val(code).text(name+number);

			return option.appendTo(select);
	}






});









