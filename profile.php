<?php 
	include 'head.php';
	$user=new User($_SESSION['id']);
	$name=$user->name ;
	$username=$user->user_name;
	$email=$user->email;
	$password=$user->password;
	$birthdate=$user->birthdate;
	$credit=$user->credit;
	$interest=$user->interest;
	$address=$user->address;

?>
<script>
	$(function(){
		$("#editn").click(function(event) {
			$("#ename").show();
			$("#editname").show();
		});
		$("#editname").click(function(event) {
			var data={};
			data.ename = $('#ename').val();
			data.id=$("#uid").val();
			$.ajax
			({
				url: 'server.php?action=editusername',
				type: 'POST',
				data: data,
				success: function (response) 
				{
					if(response !=0)
					{
					//	$("#res").text('name Updated');
						$('#name').text($('#ename').val());
						$("#ename").hide();
						$("#editname").hide();
					}
					else
					{
						$("#res").text('name not Updated');
					}
				}
			})
		});


		$("#editb").click(function(event) {
			$("#ebirth").show();
			$("#editbirthdate").show();
		});
		$("#editbirthdate").click(function(event) {
			var data={};
			data.ebirth = $('#ebirth').val();
			data.id=$("#uid").val();
			$.ajax
			({
				url: 'server.php?action=editbirth',
				type: 'POST',
				data: data,
				success: function (response) 
				{
					if(response !=0)
					{
						//$("#res1").text('birthdate Updated');
						$('#birth').text($('#ebirth').val());
						$("#ebirth").hide();
						$("#editbirthdate").hide();
					}
					else
					{
						$("#res1").text('birthdate not Updated');
					}
				}
			})
		});


/////////////////////////////////////////





$("#editc").click(function(event) {
			$("#ecredit").show();
			$("#editcredit").show();
		});
		$("#editcredit").click(function(event) {
			var data={};
			data.ecredit = $('#ecredit').val();
			data.id=$("#uid").val();
			$.ajax
			({
				url: 'server.php?action=editusercredit',
				type: 'POST',
				data: data,
				success: function (response) 
				{
					if(response !=0)
					{
					//	$("#res2").text('credit Updated');
						$('#credit').text($('#ecredit').val());
						$("#ecredit").hide();
						$("#editcredit").hide();
					}
					else
					{
						//$("#res2").text('credit not Updated');
					}
				}
			})
		});

//////////////////////////////////////////
	})
</script>
<style>
	.table-responsive{width:500px; margin:auto; margin-top:10px;}	
</style>
<input type="text" hidden id="uid" value= <?php echo $_SESSION['id'] ?> />
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
			     	<input type="text" id="ename" hidden />
			     	<input type="button" id="editname" value="Edit Name" hidden />
			     	<p id="res"></p>
			     	</td>
			     	<td>
			     	<button class="btn btn-info bt" type="button" id="editn"><span class="glyphicon glyphicon-pencil"></span></button>

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
			     	<input type="text" id="ebirth" hidden />
			     	<input type="button" id="editbirthdate" value="edit birthdate" hidden />
			     	<p id="res1"></p>
			     	</td>
			     	<td>
			     	<button class="btn btn-info bt" id="editb" type="button"><span class="glyphicon glyphicon-pencil"></span></button>
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
				    
			     	<p class="form-control-static"><?php echo $username  ?></p>
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
				    
			     	<p class="form-control-static"></p>
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
			     	<p class="form-control-static"><?php echo $address  ?></p>
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
				    
			     	<p class="form-control-static" id="credit"><?php echo $credit  ?></p>

			     	<input type="text" id="ecredit" hidden />
			     	<input type="button" id="editcredit" value="Edit Credit" hidden />
			     	</td>
			     	<td>
			     	<button class="btn btn-info bt" id="editc" type="button"><span class="glyphicon glyphicon-pencil"></span></button>
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
			     	<td>
			     	<button class="btn btn-info bt" type="button"><span class="glyphicon glyphicon-pencil"></span></button>
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
