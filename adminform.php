
 <?php 

 include 'head.php'; ?>
  <div class="container">
	<nav id="navadmin" class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	     <a class="navbar-brand" href="adminform.php">Admin Panel</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li><a id="shCat">Category </a></li>
	    </ul>
	    <ul class="nav navbar-nav">
	      <li><a id="shsubCat">Sub Category </a></li>
	    </ul>

	     <ul class="nav navbar-nav">
	       <li><a id="shPro">Product</a></li>
	    </ul>
	    <ul class="nav navbar-nav">
	       <li><a id="shUser">Users</a></li>
	    </ul>
	   	<ul class="nav navbar-nav">
	       <li><a id="prodcs">Show Products</a></li>
	    </ul>

	  </div>
	</nav>
 </div>
 <div class="container">

 <div id="user" class="table-responsive">

 	
 </div>
 <div id="prods">
 	
 </div>

 <div id="cat">
	<form method="POST">
	 	<input type="text"  class="form-control txt" id="catName" name="catName" placeholder="enter category name to add" />	
	 	<span id="caterr"> </span>
	 	<span id="caterrr"> </span>
	 	<input type="submit" value="add Category" id="addCategory" name="addCategory" class="btn btn-warning " />

	 	<span id="result1"> </span>
	</form>
	<form method="POST">

	 	<input type="text" class="form-control txt" id="catNameE" name="catNameE" placeholder="enter category name"/>

	 	<span id="caterrE"> </span>

	 	<input type="text" class="form-control txt" id="catNameN" name="catNameN" placeholder="enter new name to category"/>
	 	<span id="caterrN"> </span>
	 	<span id="caterrNN"> </span>
	 	<input type="submit" value="edit Category" id="editCategory" name="editCategory" class="btn btn-info" />
	 	<span id="result2"> </span>

	</form>
	<form method="POST">

		<input type="text" class="form-control txt" id="catNameR" name="catNameR" placeholder="enter category name to remove"/>	
	 	<span id="caterrR"> </span>
	 	<span id="caterrRR"> </span>
	 	<input type="submit"  value="remove Category" id="removeCategory" name="removeCategory" class="btn btn-success" />
	 	<span id="result3"> </span>
	</form>
</div>

<div id="subc">	
	<form  method="post">	
	 	<div id="mainCategory"> </div>	
	 	<div id="subCategory"> </div>
	 	<input type="text" class="form-control txt" id="subCatName" name="subCatName" placeholder="enter Sub category"/>
	 	<input type="submit" id="addSubCategory" value="addSubCategory" name="addSubCategory" class="btn btn-warning"/>
	 	<input type="submit" id="editSubCategory" value="editSubCategory" name="editSubCategory" class="btn btn-success"/>
	 	<input type="submit" id="removeSubCategory" value="removeSubCategory" name="removeSubCategory" class="btn btn-info"/>

	 	<span id="result4"> </span>

	</form>
</div>
<div id="pro">
<form method="POST">
 	<input type="number" class="form-control txt" id="price" name="price" placeholder="enter product price"/>
 	<input type="number" class="form-control txt" id="quantity" name="quantity" placeholder="enter quantity"/>	
 	<div>
 		<select name="material" class="form-control txt" >
 			<option>Select Material of product </option>
	 		<option value="Cotton">Cotton</option>
	 		<option value="Silk">Silk</option>
 		</select>
 	</div>
 	<div>
 		<select id="color" name="color" class="form-control txt">
 			<option>Select color of product </option>
	 		<option value="Red">Red</option>
	 		<option value="Yellow">Yellow</option>
	 		<option value="Green">Green</option>
	 		<option value="Black">Black</option>
	 		<option value="Blue">Blue</option>
	 		<option value="Pink">Green</option>
	 		<option value="Silver">Black</option>
	 		<option value="Cyan">Blue</option>
	 		<option value="White">Green</option>
 		</select>
 	</div>

 	<div>
 		 <select name="sizeProduct" class="form-control txt">
 		 <option>Select size of product </option>
 		<option value="Small">Small</option>
 		<option value="Medium">Medium</option>
 		<option value="Large">Large</option>
 		<option value="XL">XL</option>
 		<option value="XXL">XXL</option>
 	</select>
 	</div>
	 	 <div id="mainProduct" > </div>

		<div id="subProduct" > </div>
 	<input type="submit" class="btn btn-success" value="addProduct" id="addProduct" name="addProduct" />
 	<span id="result5"> </span>

</form>
</div>

 </div>

 <div id="main" class="container">
 	<h3>Welcom Admin ^_^ </h3>
 </div>
 </body>
 </html>