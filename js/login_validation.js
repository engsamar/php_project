var login_flag;

$(function()
{
	login_flag = true;
	$("#email").focus();

	$("#login").on('click',function(event)
	 {
	 	
		event.preventDefault();
		
		$.ajax({
			url: 'server2.php?action=check&password='+$("#password").val()+'&userName='+$("#email").val(),
			type: 'GET',
			success: function(response)
			{
				console.log(response);
				if(!response)
				{
					//$("#password").select();
					$("#invalid_span").css('display', 'block');
					login_flag = false;
					//console.log(login_flag);
				}
				else
				{
					
					login_flag = true;

					location.href="index.php";

					$("#invalid_span").css('display', 'none');
				}	
			}
		});

	});
});



