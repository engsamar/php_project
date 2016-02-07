<?php 
	include 'head.php';
	$user=new User($_GET['id']);
	$name=$user->name ;
	$username=$user->user_name;
	$email=$user->email;
	$password=$user->password;
	$birthdate=$user->birthdate;
	$credit=$user->credit;
	$interest=$user->interest;
	$address=$user->address;

?>

<style>
	.table-responsive{width:500px; margin:auto; margin-top:10px;}	
</style>
<input type="text" hidden id="uid" value= <?php echo $_GET['id'] ?> />
<div class="table-responsive">
<table  class="table table-striped table-bordered">
	
	<thead>
		
	</thead>
	<tbody>
		<tr>
			<td>
				<div class="form-group">
				    <label class=" control-label">Name</label>
				   <td>    
			     	<p class="form-control-static" id="name"><?php echo $name  ?></p>

			     	</td>
			     	
   			 	</div>
   			</td>

		</tr>
		<tr>
			<td>
				<div class="form-group">
				    <label class=" control-label">Birthday</label>
				   <td>
				    
			     	<p class="form-control-static" id="birth"><?php echo $birthdate  ?></p>
			     	</td>
   			 	</div>
   			</td>
   			
		</tr>
		<tr>
			<td>
				<div class="form-group">
				    <label class=" control-label">Email</label>
				   <td>
				    
			     	<p class="form-control-static"><?php echo $email  ?></p>
			     	</td>
   			 	</div>
   			</td>
   			
		</tr>
		<tr>
			<td>
				<div class="form-group">
				    <label class=" control-label">UserName</label>
				   <td>
				    
			     	<p class="form-control-static"><?php echo $username  ?></p>
			     	</td>

   			 	</div>
   			</td>
   			
		</tr>
		<tr>
			<td>
				<div class="form-group">
				    <label class=" control-label">Job</label>
				   <td>
				    
			     	<p class="form-control-static"></p>
			     	</td>
   			 	</div>
   			</td>
   			
		</tr>
		<tr>
			<td>
				<div class="form-group">
				    <label class=" control-label">Address</label>
				   <td>    
			     	<p class="form-control-static"><?php echo $address  ?></p>
			     	</td>
   			 	</div>
   			</td>
   			
		</tr>
		<tr>
			<td>
				<div class="form-group">
				    <label class=" control-label">Credit limit</label>
				   <td>
				    
			     	<p class="form-control-static" id="credit"><?php echo $credit  ?></p>
			     	</td>
   			 	</div>
   			</td>
   			
		</tr>
		<tr>
			<td>
				<div class="form-group">
				    <label class=" control-label">Interest</label>
				   <td>
				    
			     	<p class="form-control-static"><?php echo $interest  ?></p>
			     	</td>
   			 	</div>
   			</td>
   			
		</tr>
		<tr >
			<td>
				<div class="form-group">
				    <label class=" control-label">Password</label>
				   <td>
				    
			     	<p class="form-control-static"><?php echo $password ?></p>
			     	</td>
   			 	</div>
   			</td>
   			
		</tr>

	</tbody>
</table>
</div>
<?php 
	include 'footer.php';
?>
