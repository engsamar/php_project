$(document).ready(function(c) {
	$('.close1').on('click', function(c)
	{
	 a=$('.close1').parent().find('img').attr('alt');
	 // p=$('.price').find('p').text().replace("Price: $","");
	 // q=$('.txt_qty').attr('placeholder');
		$(this).parent().fadeOut('slow', function(c)
		{
			 $('.close').parent().remove();
			 // **********************************
				 $.ajax({
				url: 'calcul.php?pro_id='+a+'&action=DelThisOrder',
				type: 'POST',
				success: function (response) 
				{
					console.log(response);	
					
				},
				error: function (error) 
				{
					console.log(error);
				}
			});

		});
	});	
	  //********************************
	  $('.buy').on('click', function(c)
	{
	 a=$('.buy').parent().parent().find('img').attr('alt');
	  p=$('.price').find('p').text().replace("Price: $","");
	 q=$('.txt_qty').attr('placeholder');

		
			 // **********************************
				 $.ajax({
				url: 'calcul.php?pro_id='+a+'&qty='+q+'&p_price='+p+'&action=BuyThisOrder',
				type: 'POST',
				success: function (response) 
				{
					if(response==1)
					{
						pHTML="";
						pHTML+='<div class="alert alert-danger" role="alert">Sorry! Charge your credit and try again.</div>';
						$('.error').html(pHTML);
					}
					
					else
					{
						$(this).parent().parent().parent().fadeOut('slow', function(c)
						{
			 				$(this).parent().parent().parent().remove();

						});	

		

					}
					
				},
				error: function (error) 
				{
					console.log(error);
				}
			
	});	
				 });
	  // ************************

	  $('.remove').click(function(event) {
		event.preventDefault();
			$.ajax({
			url: 'calcul.php?action=del',
			type: 'POST',
			success: function (response) {
			console.log(response);	
				
			},
			error: function (error) 
			{
				console.log(error);
			}
		});

	}); 
	  // ****************************

	  $('.search-panel .dropdown-menu').find('a').click(function(e) {
		    e.preventDefault();
		    var param = $(this).attr("href").replace("#","");
		    var concept = $(this).text();
		    console.log(concept);
		    $('#choice[type="hidden"]').attr("value",concept);
  			$('.search-panel span#search_concept').text(concept);
		    $('.search-panel span#search_concept').css("color","brown");
		    $('.input-group #search_param').val(param);
		    if(concept=='Price')
		    	$('.input-group .form-control').attr("placeholder","Enter price you want..");
		   else
		    	$('.input-group .form-control').attr("placeholder","Man or Weman or Childern... ");
		    
		  });
	  // **********************************
	  $('.add').click(function(event) {
		event.preventDefault();
		var user={};
			user.id = $('.my_img').attr('alt');
			pric = $('.item_price').text();
			user.price=pric.replace("$","");

			$.ajax({
			url: 'calcul.php?action=add',
			type: 'POST',
			data:user,
			success: function (response) {
			console.log(response);	
				
			},
			error: function (error) 
			{
				console.log(error);
			}
		})

});
	  // *******************
	  




// *************************************
});