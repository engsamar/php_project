
<?php 
include 'head.php';
 ?>
<style>
	.grid-top img{height:400px;}
</style>

<!-- slide show -->
<div class="banner">
	<div class="container">
		<script src="js/responsiveslides.min.js"></script>
		<script>
			$(function () {
			$("#slider").responsiveSlides({
			auto: true,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			pager: true,
			});
			});
		</script>
			<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
			    <li>
				   	<div class="banner-text">
						<h3>Lorem Ipsum is not simply dummy  </h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
						<a href="single.php">Learn More</a>
					</div>
				</li>
				<li>
					<div class="banner-text">
							<h3>There are many variations </h3>
							<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
							<a href="single.php">Learn More</a>
					</div>
				</li>
				<li>
					<div class="banner-text">
						<h3>Sed ut perspiciatis unde omnis</h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
						<a href="single.php">Learn More</a>
					</div>
				</li>
			</ul>
		</div>

	</div>
	</div>

<!--content-->

<div class="content">
	<div class="container">
		<div class="content-top">
			<h1>NEW RELEASED</h1>
			<div class="grid-in">
				<div class="col-md-4 grid-top">
					<a href="login.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="image/1">
						<div class="b-wrapper">
							<h3 class="b-animate b-from-left    b-delay03 ">
								<span>T-Shirt</span>	
							</h3>
						</div>
					</a>
					<p><a href="login.php">Contrary to popular</a></p>
				</div>
			<div class="col-md-4 grid-top">
				<a href="login.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="image/2" alt="">
					<div class="b-wrapper">
						<h3 class="b-animate b-from-left    b-delay03 ">
							<span>Dress</span>	
						</h3>
					</div>
				</a>
				<p><a href="login.php">classical Latin</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="login.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="image/3" alt="">
					<div class="b-wrapper">
						<h3 class="b-animate b-from-left    b-delay03 ">
							<span>Dress</span>	
						</h3>
					</div>
				</a>
				<p><a href="login.php">undoubtable</a></p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="grid-in">
			<div class="col-md-4 grid-top">
				<a href="login.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="image/4" alt="">
					<div class="b-wrapper">
						<h3 class="b-animate b-from-left    b-delay03 ">
							<span>Dress</span>	
						</h3>
					</div>
				</a>
				<p><a href="login.php">suffered alteration</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="login.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="image/4" alt="">
					<div class="b-wrapper">
						<h3 class="b-animate b-from-left    b-delay03 ">
							<span>Dress</span>	
						</h3>
					</div>
				</a>
				<p><a href="login.php">Content here</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="login.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="image/5" alt="">
					<div class="b-wrapper">
						<h3 class="b-animate b-from-left    b-delay03 ">
							<span>Dress</span>	
						</h3>
					</div>
				</a>
				<p><a href="login.php">readable content</a></p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	
</div>
<?php
	include 'footer.php';
?>	