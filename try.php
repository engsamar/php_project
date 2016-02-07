<?php
include 'head.php';
$s= $_POST['x'];
$conn=mysqli_connect('localhost','root','iti','clothes_shop');
echo '<div class="col-md-9 product1"><div class=" bottom-product">';
if($_POST['choice']=='Price')
{
	$data = mysqli_query($conn,"SELECT * FROM products WHERE price=$s");
	foreach ($data as $key => $value)
	 {
	  $n=$value['id'];
	  $s=$value['price'];
?>
<style>

	.img-responsive{height:300px; width:300px; }
	.change{margin-left:100px; margin-top:50px; }
	.simpleCart_shelfItem{margin-bottom:50px; border:2px solid pink; padding-top:10px;}

</style>
				<div class="change">
					<div class="col-md-4 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
							<a href="single.php?id=<?php echo $n?>&price=<?php echo $s?>"><img class="img-responsive" src='image/<?php echo $n ?>'>
							<div class="pro-grid">
										<span class="buy-in">Buy Now</span>
							</div>
						</a>	
						</div>
						<p class="tun">It is a long established fact that a reader</p>
						<a href="#" class="item_add"><p class="number item_price"><i> </i>$<?php echo $s?></p></a>						
					</div>
				
				</div>
<?php
	  
	}
	echo '</div></div> <div class="clearfix"> </div><br/>';
}
else if($_POST['choice']=='Category')
{
	$query=" select distinct products.* from products,category,sub_category where products.sub_id=sub_category.id and sub_category.id=category.id and category.type='$s';
;";
	$data = mysqli_query($conn,$query);
	foreach ($data as $key => $value) {
		
	  $n=$value['id'];
	   $s=$value['price'];


?>
		<div class="change">
			<div class="col-md-4 bottom-cd simpleCart_shelfItem">
			<div class="product-at ">
				<a href="single.php?id=<?php echo $n?>&price=<?php echo $s?>"><img class="img-responsive" src='image/<?php echo $n; ?>'>
				<div class="pro-grid">
							<span class="buy-in">Buy Now</span>
				</div>
			</a>	
			</div>
			<p class="tun">It is a long established fact that a reader</p>
			<a href="#" class="item_add"><p class="number item_price"><i> </i>$<?php echo $s?></p></a>						
			</div>
						
		</div>
<?php
}
echo '</div></div> <div class="clearfix"> </div><br/>';
}

else 
{
	echo '<div class="alert alert-danger" role="alert">Oh snap! Change a few things up and try again.</div>';
	// echo  "<div class='text-center'><p><strong>"." Try again "."</strong></p></div>";
	echo '</div></div> <div class="clearfix" > </div>';
}
include 'footer.php';
?>
