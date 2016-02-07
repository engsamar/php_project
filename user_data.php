<?php 
	include 'head.php';
	if(isset($_SESSION['login_user']))
	{
		$user = new User();

		$result = $user->getUser($_SESSION['login_user']);
		//echo $result['name'];
	}
	
?>
<style>
	.table-responsive{width:600px; margin:auto; margin-top:10px;}

	
</style>
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
				    
			     	<p class="form-control-static"><?php echo $result['name'];?></p>
			     	</td>
			     	<td>
			     	<button class="btn btn-info bt" type="button"><span class="glyphicon glyphicon-pencil"></span></button>
   			 	</td>
   			 	</div>
   			</td>

		</tr>
		<tr>
			<td>
				<div class="form-group">
				    <label class=" control-label">Birthday</label>
				   <td>
				    
			     	<p class="form-control-static"><?php echo $result['birthdate'];?></p>
			     	</td>
			     	<td>
			     	<button class="btn btn-info bt" type="button"><span class="glyphicon glyphicon-pencil"></span></button>
   			 	</td>
   			 	</div>
   			</td>
   			
		</tr>
		<tr>
			<td>
				<div class="form-group">
				    <label class=" control-label">Email</label>
				   <td>
				    
			     	<p class="form-control-static"><?php echo $result['email'];?></p>
			     	</td>
			     	<td>
			     	<button class="btn btn-info bt" type="button"><span class="glyphicon glyphicon-pencil"></span></button>
   			 	</td>
   			 	</div>
   			</td>
   			
		</tr>
		<tr>
			<td>
				<div class="form-group">
				    <label class=" control-label">UserName</label>
				   <td>
				    
			     	<p class="form-control-static"><?php echo $result['username'];?></p>
			     	</td>
			     	<td>
			     	<button class="btn btn-info bt" type="button"><span class="glyphicon glyphicon-pencil"></span></button>
   			 	</td>
   			 	</div>
   			</td>
   			
		</tr>
		<tr>
			<td>
				<div class="form-group">
				    <label class=" control-label">Job</label>
				   <td>
				    
			     	<p class="form-control-static"><?php echo $result['job'];?></p>
			     	</td>
			     	<td>
			     	<button class="btn btn-info bt" type="button"><span class="glyphicon glyphicon-pencil"></span></button>
   			 	</td>
   			 	</div>
   			</td>
   			
		</tr>
		<tr>
			<td>
				<div class="form-group">
				    <label class=" control-label">Address</label>
				   <td>
				    
			     	<p class="form-control-static"><?php echo $result['address'];?></p>
			     	</td>
			     	<td>
			     	<button class="btn btn-info bt" type="button"><span class="glyphicon glyphicon-pencil"></span></button>
   			 	</td>
   			 	</div>
   			</td>
   			
		</tr>
		<tr>
			<td>
				<div class="form-group">
				    <label class=" control-label">Credit limit</label>
				   <td>
				    
			     	<p class="form-control-static"><?php echo $result['credit'];?></p>
			     	</td>
			     	<td>
			     	<button class="btn btn-info bt" type="button"><span class="glyphicon glyphicon-pencil"></span></button>
   			 	</td>
   			 	</div>
   			</td>
   			
		</tr>
		<tr>
			<td>
				<div class="form-group">
				    <label class=" control-label">Interest</label>
				   <td>
				    
			     	<p class="form-control-static"><?php echo $result['interest'];?></p>
			     	</td>
			     	<td>
			     	<button class="btn btn-info bt" type="button"><span class="glyphicon glyphicon-pencil"></span></button>
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