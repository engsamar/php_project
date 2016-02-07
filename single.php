<?php
	include 'head.php';
?>
	
<!--content-->
<div class="product">
	<div class="container">
		<div class="col-md-3 product-price">
			<div class=" rsidebar span_1_of_left">
				<div class="of-left">
					<h3 class="cate">Categories</h3>
				</div>
			 	<ul class="menu">
					<li class="item1"><a href="#">Men </a>
						<ul class="cute">
							<li class="subitem1"><a href="#">Cute Kittens </a></li>
							<li class="subitem2"><a href="#">Strange Stuff </a></li>
							<li class="subitem3"><a href="#">Automatic Fails </a></li>
						</ul>
					</li>
					<li class="item2"><a href="#">Women </a>
						<ul class="cute">
							<li class="subitem1"><a href="#">Cute Kittens </a></li>
							<li class="subitem2"><a href="#">Strange Stuff </a></li>
							<li class="subitem3"><a href="#">Automatic Fails </a></li>
						</ul>
					</li>
					<li class="item3"><a href="#">Kids</a>
						<ul class="cute">
							<li class="subitem1"><a href="#">Cute Kittens </a></li>
							<li class="subitem2"><a href="#">Strange Stuff </a></li>
							<li class="subitem3"><a href="#">Automatic Fails</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>	
<!--initiate accordion-->
<script type="text/javascript">
	$(function() {
	    var menu_ul = $('.menu > li > ul'),
	           menu_a  = $('.menu > li > a');
	    menu_ul.hide();
	    menu_a.click(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
	    });

	});
</script>
			<div class=" per1">
				<img class="img-responsive" src="image/3" alt="">
				<div class="six1">
					<h4>DISCOUNT</h4>
					<p>Up to</p>
					<span>60%</span>
				</div>
			</div>
		</div>
		<div class="col-md-9 product-price1">
			<div class="col-md-5 single-top">	
			<div class="flexslider">
  				<ul class="slides">
	   				<li data-thumb="image/<?php echo $_GET['id']?>">
	    				<img src="image/<?php echo $_GET['id']?>"  alt="<?php echo $_GET['id']?>" class="my_img" />
	    			</li>
	    			
    				
  				</ul>
			</div>
<!-- FlexSlider -->

<script defer src="js/jquery.flexslider.js"></script>
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>

<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />


		</div>	
		<div class="col-md-7 single-top-in simpleCart_shelfItem">
			<div class="single-para ">
				
				<h5 class="item_price"><?php echo '$'.$_GET['price'] ?></h5>
				<p>Lorem ipsum dolor sit amet. </p>
				<div class="available">
					<ul>
						<li>Color
							<select>
							<option>Silver</option>
							<option>Black</option>
							<option>Dark Black</option>
							<option>Red</option>
							</select>
						</li>
						<li class="size-in">Size<select>
							<option>Large</option>
							<option>Medium</option>
							<option>small</option>
							</select>
						</li>
						<div class="clearfix"> </div>
					</ul>
				</div>
				<a href="#" class="add-cart item_add add x">ADD TO CART</a>
				

			</div>
		</div>
	</div>
</div>
<div class="clearfix"> </div>
<?php
	include 'footer.php';
?>	