<?php
	include 'head.php';

?>
<!-- ******************************************************************* -->
<style>
	.buy{position:absolute; bottom:30px; right:30px;}
	.error{position:absolute; bottom:0px; left:0px;}	
</style>	
<div class="container">
	<div class="check">	 
			 <h1>My Shopping Bag </h1>

			   
					<!-- ********************* -->
<?php 
	
		$data =$order->GetOrderData($_SESSION['id']);
		foreach ($data as $key => $value) {
?>

<div class="cart-header">
	<div class="close1"> </div>
	<div class="cart-sec simpleCart_shelfItem">
		<div class="cart-item cyc">
		<img src="image/<?php echo $value['product_id']?>" class="img-responsive immg" alt="<?php echo $value['product_id']?>"/>
		</div>
	<div class="cart-item-info">
		
			<p>Size : <?php echo $value['size'];?></p>
			<div class='price'>
				<p>Price: <?php echo "$".$value['product_price'];?></p>
			</div>
			<div class="col-xs-3">
					<div class="input-group">
						<!-- <label class="control-label col-sm-2">Qty:</label> -->
						<input type="text" class="form-control txt_qty" placeholder="<?php echo $value['qty'];?>" disabled="disabled">
						<span class="input-group-btn">
						<button class="btn btn-info edit" type="button"><span class="glyphicon glyphicon-pencil"></span></button>
						</span>
					</div>
					</div>

			
	

	<div class="delivery">
	<p><?php echo "discount:".$value['discount']."%";?></p>

	</div>
	<div class="clearfix"></div>	
	<button class="btn btn-success buy" type="button">Buy Now</span></button>
	</div>
	<div class='error'></div>
	<div class="clearfix"></div>

	</div>
</div>

<?php 
}
?>

</div>
</div>

<div class="clearfix"></div>
<?php
	include 'footer.php';
?>
			