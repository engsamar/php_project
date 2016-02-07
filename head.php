<?php
session_start();
	
	include 'mainCategory.php';
	$Category=new MainCategory();
	include 'order.php';
	$order=new Order(); 
	include 'user.php';
	$user=new User();
?>
<!DOCTYPE html>
<html>
<head>
<title>New Store A Ecommerce Category | Home</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/register_validation.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/P.css">	
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/admin.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script type="text/javascript" src="js/myquery.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
 <!--<script src="js/simpleCart.min.js"> </script>-->
<script type="text/javascript" src="js/register_validation.js"></script>

 <script src="admin.js" type="text/javascript"></script>

</head>
<body>
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">  
		<!-- search button -->
		<!-- ******************************************************************** -->
			<form name="search" method="post" action="try.php">
				<div class="col-xs-4">
				    <div class="input-group">
				        <div class="input-group-btn search-panel">
				            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				            	<span id="search_concept">Search by</span> <span class="caret"></span>
				            </button>
				            <ul class="dropdown-menu" role="menu">
				              <li><a href="#Price"/>Price</a></li>
				              <li class="divider"></li>
				              <li><a href="#Category">Category</a></li>
				           </ul>
				        </div>   
				        <input type="text" class="form-control" name="x" placeholder="Search ...">
				        
				        <span class="input-group-btn">
				            <button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-search"></span></button>
				        </span>
				    </div>
				</div>
				<input type="hidden" name="choice" id="choice" value=""/>
			</form>

	<!-- ************************************* -->

		<div class="header-left">		
			<ul>
				<li><a href="login.php"  class="link" >Login</a></li>
				<li><a href="server2.php?action=close"  class="log">LogOut</a></li>
				<li ><a  href="register.php" class="link" >Register</a></li>
				<li><a class="color6 admin" href="adminform.php"  hidden>Control Admin</a></li>
				<li><a class="color6 log" href="profile.php" >Profile</a></li>

			</ul>
			<!-- ************************* -->
				<?php 

				if(isset($_SESSION['login_user']))
				{
					$data=$user->getUser($_SESSION['login_user']);
					$_SESSION['id']=$data['id'];
					$_SESSION['credit']=$data['credit'];
					$_SESSION['userType']=$data['userType'];
					$sum=$order->cart($_SESSION['id']);
					$s=$sum['s'];
					$p=$sum['p'];
					$order->addcarttouser($s,$p,$_SESSION['id']);
				}
				?>
			<div class="cart box_1">
				<a href="checkout.php">
					<h3> <div class="total">
					<span class="simpleCart_total"><?php 
				if(isset($_SESSION['login_user']))
				{
					echo '$'.$sum['p']; 
				}
				else
				{
					echo 0;
				}
					?>
				</span> (<span id="simpleCart_quantity" class="simpleCart_quantity"><?php
						if(isset($_SESSION['login_user']))
				{
					 echo $sum['s'];
				}
				else
					{
						echo 0;
					}
						?></span> items)</div>
					<img src="images/cart.png" alt=""/></h3>
				</a>
				<p><a href="#" class="simpleCart_empty remove">Empty Cart</a></p>
			</div>
		
		
			<!-- ******************* -->
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="container">
		<div class="head-top">

			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt=""></a>	
			</div>
		  	<div class=" h_menu4">
				<ul class="memenu skyblue">
				  <li class="active grid"><a class="color8" href="index.php">Home</a></li>	
	
			     <?php $data=$Category->getMainCategory();
			     		foreach ($data as $key => $value) {
			     ?> 
			      <li><a class="color1" href="#"><?php echo $value['type'];?></a>
			      	<div class="mepanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<ul>
									<li><a href="products.php">Accessories</a></li>
									<li><a href="products.php">Bags</a></li>
									<li><a href="products.php">Caps & Hats</a></li>
									<li><a href="products.php">Hoodies & Sweatshirts</a></li>
									<li><a href="products.php">Jackets & Coats</a></li>
									<li><a href="products.php">Long Sleeve T-Shirts</a></li>
									<li><a href="products.php">Jeans</a></li>
									<li><a href="products.php">Jewellery</a></li>
									<li><a href="products.php">Jumpers & Cardigans</a></li>
									<li><a href="products.php">Leather Jackets</a></li>
									<li><a href="products.php">Loungewear</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
						<div class="h_nav">
							<ul>
								<li><a href="products.php">Shirts</a></li>
								<li><a href="products.php">Shoes, Boots & Trainers</a></li>
								<li><a href="products.php">Shorts</a></li>
								<li><a href="products.php">Suits & Blazers</a></li>
								<li><a href="products.php">Sunglasses</a></li>
								<li><a href="products.php">Sweatpants</a></li>
								<li><a href="products.php">Swimwear</a></li>
								<li><a href="products.php">Trousers & Chinos</a></li>
								<li><a href="products.php">T-Shirts</a></li>
								<li><a href="products.php">Underwear & Socks</a></li>
								<li><a href="products.php">Vests</a></li>
							</ul>	
						</div>							
						</div>
					<div class="col1">
					<div class="h_nav">
						<h4>Popular Brands</h4>
						<ul>
							<li><a href="products.php">Levis</a></li>
							<li><a href="products.php">Persol</a></li>
							<li><a href="products.php">Nike</a></li>
							<li><a href="products.php">Edwin</a></li>
							<li><a href="products.php">New Balance</a></li>
							<li><a href="products.php">Jack & Jones</a></li>
							<li><a href="products.php">Paul Smith</a></li>
							<li><a href="products.php">Ray-Ban</a></li>
							<li><a href="products.php">Wood Wood</a></li>
						</ul>	
					</div>												
					</div>
     		</div>
			</div>
					</li>
				<?php } ?>    
				<li><a class="color4" href="blog.php">Blog</a></li>				
				<li><a class="color6" href="contact.php">Contact</a></li>
				
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>
<?php
		
	if(isset($_SESSION['login_user']))
	 {
	 	 	
	 	?>
	 	<script>
	 		
	 		$('.link').css('display','none');
	 		$('li .log').css('display','block');
	 	
	 	</script>
	 <?php } ?>

	 <?php	
	
	if($_SESSION['userType']=="admin")
	{
?>
<script>
	$('.admin').show();
</script>
<?php		
	}
?>
