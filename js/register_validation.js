
var submit_flag; 
var name_flag;
var birth_flag;
var email_flag;
var credit_flag;
var pass_flag;
var conf_flag;
var username_flag;


// function check()
// 	{
// 		// if(name_flag && birth_flag && email_flag && credit_flag && pass_flag && conf_flag && username_flag)
// 		// {
// 		// 	$("#form1").action="home.php";
// 		// 	console.log("ok")
// 		// }
// 		// else
// 		// 	{
// 		// 		$("#form1").action="home.php";
// 		// 		console.log("no")
// 		// 	}
			
// 		return (name_flag&&birth_flag&&email_flag&&credit_flag&&pass_flag && conf_flag && username_flag);
// 	}
$(function(){

	submit_flag = false;
	name_flag = false;
	birth_flag = false;
	email_flag = false;
	credit_flag = false;
	pass_flag = false;
	conf_flag = false;
	username_flag = false; 
	
	///////////////////////

	// function check()
	// {
	// 	// if(name_flag && birth_flag && email_flag && credit_flag && pass_flag && conf_flag && username_flag)
	// 	// {
	// 	// 	$("#form1").action="home.php";
	// 	// 	console.log("ok")
	// 	// }
	// 	// else
	// 	// 	{
	// 	// 		$("#form1").action="home.php";
	// 	// 		console.log("no")
	// 	// 	}
			
	// 	return (name_flag && birth_flag && email_flag && credit_flag && pass_flag && conf_flag && username_flag);
	// }

	$("#name").focus();

	$("#name").on('blur', function(event) {
		//var pattern1 = /^[a-zA-Z]+$/;
		var pattern1 = /^([a-zA-Z]+\s)*([a-zA-Z]+)$/;
		// var pattern1 = /[a-zA-Z]{8,30}$/;
		if($(this).val().match(pattern1))
		{
			$(this).removeClass('error');
			$("#name_span").css('display', 'none');
			name_flag = true;
		}
		else
		{
			$(this).select();
			$(this).addClass('error');
			$("#name_span").css('display', 'block');
			name_flag = false;
		}
	});


	$("#birthdate").on('blur', function(event) {
		//var pattern2 = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
		var pattern2 = /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/;
		if($(this).val().match(pattern2))
		{
			$(this).removeClass('error');
			$("#birth_span").css('display', 'none');
			birth_flag = true;
		}
		else
		{
			$(this).select();
			$(this).addClass('error');
			$("#birth_span").css('display', 'block');
			birth_flag = false;
		}
	});


	$("#email").on('blur', function(event) {
		var pattern3 = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
		if($(this).val().match(pattern3))
		{
			//$(this).removeClass('error');
			$("#email_span").css('display', 'none');
			email_flag = true;
		}
		else
		{
			$(this).select();
			// $(this).addClass('error');
			$("#email_span").css('display', 'block');
			email_flag = false;
		}

		$.ajax({
			url: 'server1.php?action=validateEmail&email='+$(this).val(),
			type: 'GET',
			
			success: function(response)
			{
				if(response)
				{
					$(this).select();
					// $(this).addClass('error');
					$("#email_span").css('display', 'block');
					email_flag = false;
				}
				else
				{
					//$(this).addClass('error');
					$("#email_span").css('display', 'none');
					email_flag = true;
				}	
			}

		});
		
	});


	$("#credit").on('blur', function(event) {
		var pattern4 = /[0-9]/;
		if($(this).val().match(pattern4))
		{
			$(this).removeClass('error');
			$("#credit_span").css('display', 'none');
			credit_flag = true;
		}
		else
		{
			$(this).select();
			$(this).addClass('error');
			$("#credit_span").css('display', 'block');
			credit_flag = false;
		}
	});


	$("#password").on('blur', function(event) {
		var pattern5 = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
		if($(this).val().match(pattern5))
		{
			//$(this).removeClass('error');
			$("#pass_span").css('display', 'none');
			pass_flag = true;
		}
		else
		{
			$(this).select();
			//$(this).addClass('error');
			$("#pass_span").css('display', 'block');
			pass_flag = false;
		}
	});


	$("#confirm_password").on('blur', function(event) {

		if($(this).val() == $("#password").val())
		{
			//$(this).removeClass('error');
			$("#conf_pass_span").css('display', 'none');
			conf_flag = true;
		}
		else
		{
			$(this).select();
			//$(this).addClass('error');
			$("#conf_pass_span").css('display', 'block');
			conf_flag = false;
		}
	});


	$("#user_name").on('blur', function(event) {

		var pattern6 = /[a-zA-Z0-9.-_]/;
		if($(this).val().match(pattern6))
		{
			//$(this).removeClass('error');
			$("#uname_span").css('display', 'none');
			username_flag = true;
		}
		else
		{
			$(this).select();
			//$(this).addClass('error');
			$("#uname_span").css('display', 'block');
			username_flag = false;
		}

		$.ajax({
			url: 'server1.php?action=validateUsername&user_name='+$(this).val(),
			type: 'GET',
			//dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
			
			success: function(response){
				if(response)
				{
					$(this).select();
					//$(this).addClass('error');
					$("#uname_span").css('display', 'block');
					username_flag = false;
				}
				else
				{
					//$(this).addClass('error');
					$("#uname_span").css('display', 'none');
					username_flag = true;
				}

			},

			error: function(){
				console.log("error");
			}

		});
		
	});


	// $("#register").on('click', function(event) {
	// 	event.preventDefault();

	// 	if(name_flag && birth_flag && email_flag && credit_flag && pass_flag && conf_flag && username_flag)
	// 		location.href="home.php";

	// 	else
	// 		location.href="register.php";	
		
	// });



	$("#register").on('click', function(event) {
		event.preventDefault();

		if(name_flag&&birth_flag&&email_flag&&credit_flag&&pass_flag && conf_flag && username_flag)
		{
			userdata = {};
			userdata.name = $("#name").val();
			userdata.username = $("#user_name").val();
			userdata.email = $("#email").val();
			userdata.password = $("#password").val();
			userdata.birthdate = $("#birthdate").val();
			userdata.credit = $("#credit").val();
			userdata.address = $("#address").val();
			userdata.interest = $("#interest").val();
			userdata.job = $("#job").val();
		
			$.ajax({
				url: 'server1.php',
				type: 'POST',
				data:userdata,

				success:function(response){
					//console.log(response);
					if(response != 0)
						location.href="index.php";
					else
						location.href="register.php"; //if error in database insertion
			 	}

			});
		}		
	});
	// $("#register").click(function(event) {
	// 	//event.preventDefault();
	// 	if(check())
	// 	{
	// 		console.log("before");
	// 		//window.location.assign("home.php");
	// 		//location.href="home.php";
	// 		$('head').html('<META http-equiv="refresh" content="0;URL=home.php">');
	// 		console.log("after");
	// 	}
	// 	else
	// 	{
	// 		console.log("you are here ");
	// 	}
	// });

});

