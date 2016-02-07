<?php 
 
	// session_start();
	if (isset($_SESSION['login_user'])) {
		header('location:index.php');
	}
	include 'head.php';
 ?>




	
<!--content-->
<div class=" container">
<div class=" register">
	<h1>Register</h1>
		  	  <form method="post" > 
				 <div class="col-md-6 register-top-grid">
					<h3>Personal information</h3>
					 <div>
						<span>Name</span>
						<input type="text" id="name" name="name">
						<span class="span_error" id="name_span" style="color: black;display:none">Name Should be Charcters only And Between 10 to 30 Charcters</span> 
					 </div>
					 <div>
						<span>BirthDate</span>
						<input type="text" id="birthdate" name="birthdate"> 
						<span class="span_error" id="birth_span" style="color: black;display:none">Birthdate should be valid and in this format "yyyy-mm-dd or yyyy/mm/dd"
						</span>
					 </div>
					 <div>
						 <span>Email Address</span>
						 <input type="text" id="email" name="email" > 
						 <span class="span_error" id="email_span" style="color: black;display:none">Invalid email address</span>
					 </div>
					 <div>
						 <span>User name</span>
						 <input type="text" id="user_name" name="user_name" > 
						 <span class="span_error" id="uname_span" style="color: black;display:none">Invalid user name</span>
					 </div>
					 <div>
						 <span>Job</span>
						 <input type="text" id="job" >
						 <span class="span_error" id="job_span" style="color: black;display:none">Job Should be Charcters only And Between 10 to 20 Charcters</span> 
					 </div>
					  <div>
						 <span>Address</span>
						 <input type="text" id="address" > 
					 </div>
					 <div>
						 <span>Credit Limit</span>
						 <input type="text" id="credit" name="credit" >
						 <span class="span_error" id="credit_span" style="color: black;display:none">Credit Should be numbers only</span>
					 </div>
					 <div>
						 <span>Interest</span>
						 <textarea name="interest" id="interest"></textarea>  
					 </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked="" ><i> </i>Sign Up for Newsletter</label>
					   </a>
					 </div>
				     <div class="col-md-6 register-bottom-grid">
						   
							 <div>
							 	<h3>prsonal information</h3>
								<span>Password</span>
								<input type="password" id="password" name="password" >
								<span class="span_error" id="pass_span" style="color: black;display:none">Week password<br/> password should be at least 8 characters and contains small letters, capital letters and numbers</span>
							 </div>
							 <div>
								<span>Confirm Password</span>
								<input type="password" id="confirm_password" >
								<span class="span_error" id="conf_pass_span" style="color: black;display:none">Passwords don't matche</span>
							 </div>
							 <input type="submit" value="Register" id="register">
							
					 </div>
					 <div class="clearfix"> </div>
				</form>
			</div>
</div>
<?php 
	include 'footer.php';
?>
			
