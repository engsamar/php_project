<?php 
	include 'head.php';
	include 'product.php';
	$product =new Product();
	$result=$product->getproduct($_GET['id']);
?>
<style>
	.table-responsive{width:600px; margin:auto; margin-top:10px;}	
</style>

<script>
	$(function(){
		

	$("#dedit").click(function(event) {
			$("#ediscount").show();
			$("#editdiscount").show();
		});

		$("#editdiscount").click(function(event) {
			var data={};
			data.ediscount = $("#ediscount").val();
			data.id=$("#pid").val();
			$.ajax
			({
				url: 'server.php?action=editDiscount',
				type: 'POST',
				data: data,
				success: function (response) 
				{
					if(response !=0)
					{
						$('#discount').text($('#ediscount').val());
						$("#ediscount").hide();
						$("#editdiscount").hide();
					}
					else
					{
						$("#res").text('Discount not Updated');
					}
				}
			})
		});


		$("#pedit").click(function(event) {
			$("#eprice").show();
			$("#editprice").show();
			$("#res").hide();
		});

		$("#editprice").click(function(event) {
			var data={};
			data.eprice = $('#eprice').val();
			data.id=$("#pid").val();
			$.ajax
			({
				url: 'server.php?action=editPrice',
				type: 'POST',
				data: data,
				success: function (response) 
				{
					if(response !=0)
					{
						$('#price').text($('#eprice').val());
						$("#eprice").hide();
						$("#editprice").hide();
						$("#res").hide();
					}
					else
					{
						$("#res").text('price not Updated');
					}
				}
			})
		});

		$("#qedit").click(function(event) {
			$("#eqty").show();
			$("#editqty").show();
			$("#res").hide();
		});

		$("#editqty").click(function(event) {
			var data={};
			data.qty = $('#eqty').val();
			data.id=$("#pid").val();
			$.ajax
			({
				url: 'server.php?action=editQty',
				type: 'POST',
				data: data,
				success: function (response) 
				{
					if(response !=0)
					{
						$('#qty').text($('#eqty').val());
						$("#eqty").hide();
						$("#editqty").hide();
						$("#res").hide();
					}
					else
					{
						$("#res").text('Quantity not Updated');
					}
				}
			})
		});







	})
</script>

<input type="text" hidden id="pid" value= <?php echo $_GET['id'] ?> />
<div class="table-responsive">

<table  class="table table-striped table-bordered">
	
	<thead>
		
	</thead>
	<tbody>
		<tr>
			<td>
				<div class="form-group">
				    <label class=" control-label">ID</label>
				   <td>
				    
			     	<p class="form-control-static"><?php echo $result['id'];?></p>
			     	</td>
   			 	</div>
   			</td>

		</tr>
		<tr>
			<td>
				<div class="form-group">
				    <label class=" control-label">Price</label>
				   <td>
				    
			     	<p class="form-control-static" id="price"><?php echo $result['price'];?></p>

			     	<input type="text" id="eprice" hidden />
			     	<input type="button" id="editprice" value="Edit Price" hidden />
			     	<p id="res"></p>
			     	</td>
			     	<td>
			     	<button class="btn btn-info bt" id="pedit" type="button"><span class="glyphicon glyphicon-pencil"></span></button>
   			 		</td>
   			 	</div>
   			</td>
   			
		</tr>
		<tr>
			<td>
				<div class="form-group">
				    <label class=" control-label">Color</label>
				   <td>
				    
			     	<p class="form-control-static"><?php echo $result['color'];?></p>
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
				    <label class=" control-label">Quantity</label>
				   <td>
				    
			     	<p class="form-control-static" id="qty"><?php echo $result['qty'];?></p>

			     	<input type="text" id="eqty" hidden />
			     	<input type="button" id="editqty" value="Edit Quantity" hidden />
			     	<p id="res"></p>
			     	</td>
			     	<td>
			     	<button class="btn btn-info bt" id="qedit" type="button"><span class="glyphicon glyphicon-pencil"></span></button>
   			 	</td>
   			 	</div>
   			</td>
   			
		</tr>
		<tr>
			<td>
				<div class="form-group">
				    <label class=" control-label">Discount</label>
					<td>  
				     	<p class="form-control-static" id="discount"><?php echo $result['discount'];?></p>
				     	<input type="text" id="ediscount" hidden />
				     	<input type="button" id="editdiscount" value="Edit discount" hidden />
				     	<p id="res"></p>
			     	</td>
			     	<td>
			     		<button class="btn btn-info bt" id="dedit" type="button"><span class="glyphicon glyphicon-pencil"></span></button>
   			 		</td>
   			 	</div>
   			</td>
   			
		</tr>
		<tr>
			<td>
				<div class="form-group">
				    <label class=" control-label">Size</label>
				   <td>
				    
			     	<p class="form-control-static"><?php echo $result['size'];?></p>
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
