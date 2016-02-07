$(function(){
	var namePat =/[a-zA-Z]{2,20}/;
	 $("#cat").hide();
	 $("#pro").hide();
	 $("#subc").hide();
	 $("#user").hide();
	 $("#prods").hide();
	 $("#prodcs").click(function(event) {
	 	/* Act on the event */
	 	$("#main").hide();
		$("#prods").hide();
	 	$("#cat").hide();
		$("#pro").hide();
		$("#subc").hide();
		$("#user").hide();
		listProduct();
		$("#prods").show();
	 });
	 $("#shUser").click(function(event) {
	 	$("#main").hide();
		$("#prods").hide();
	 	$("#cat").hide();
		$("#pro").hide();
		$("#subc").hide();
		listUser();
		$("#user").show();

	 });

	 $("#shCat").click(function(event) {
	 	$("#cat").show();	
		$("#pro").hide();
		$("#subc").hide();
		$("#user").hide();
		$("#main").hide();
		$("#prods").hide();
	 });
	 $("#shsubCat").click(function(event) {
	 	$("#cat").hide();
	 	$("#pro").hide();
	 	$("#user").hide();
	 	$("#main").hide();
	 	$("#prods").hide();
	 	listMainCategory();
	 	$("#subc").show();
	
	 });
	 $("#shPro").click(function(event) {
	 	$("#cat").hide();
	 	$("#subc").hide();
	 	$("#user").hide();
	 	$("#main").hide();
	 	$("#prods").hide();
	 	listMainCat();
	 	$("#pro").show();	

	 });

	 $("#catNameR").blur(function(event) {
        var data={};
		data.type = $("#catNameR").val();
		$.ajax
		({
			url: 'server.php?action=checkCat',
			type: 'POST',
			data: data,
			success: function (response) 
			{
				if(response ==0)
				{
					$("#caterrrRR").text('Category Name doesnot exist' );
				}
				else
				{
					$("#caterrrRR").text(' ');
				}
			}
		})

	 });


	 $("#catName").blur(function(event) {
	 	/* Act on the event */
	 	if(!$("#catName").val().match(namePat))
        {
        	$("#caterr").text('Name of Category must be Character only ');
        }
        else
        {
        	$("#caterr").text(' ' );
        }
        var data={};
		data.type = $("#catName").val();
		$.ajax
		({
			url: 'server.php?action=checkCat',
			type: 'POST',
			data: data,
			success: function (response) 
			{
				if(response !=0)
				{
					$("#caterrr").text('Category Name already exist' );
				}
				else
				{
					$("#caterrr").text(' ');
				}
			}
		})

	 });
	 $("#catNameN").blur(function(event) {
	 	if(!$("#catNameN").val().match(namePat))
        {
        	$("#caterrN").text('Name of Category must be Character only ' );
        }
        else
        {
        	$("#caterrN").text(' ' );
        }
        var data={};
		data.type = $("#catNameN").val();
		$.ajax
		({
			url: 'server.php?action=checkCat',
			type: 'POST',
			data: data,
			success: function (response) 
			{
				if(response !=0)
				{
					$("#caterrNN").text('Category Name exist' );
				}
				else
				{
					$("#caterrNN").text(' ' );
				}
			}
		})

	 });
	 $("#catNameE").blur(function(event) {
		var data={};
		data.type = $("#catNameE").val();
		$.ajax
		({
			url: 'server.php?action=checkCat',
			type: 'POST',
			data: data,
			success: function (response) 
			{
				if(response ==0)
				{
					$("#caterrE").text('Category Name doesnot exist' );
				}
				else
				{
					$("#caterrE").text(' ' );
				}
			}
		})

	 });
	

	$('#addCategory').click(function(event) 
	{
		var data={};
		data.type = $('#catName').val();
		$.ajax
		({
			url: 'server.php?action=addCategory',
			type: 'POST',
			data: data,
			success: function (response) 
			{
				if(response !=0)
				{
					$("#result1").text('Category inserted');
				}
				else
				{
					$("#result1").text('Category not inserted');
				}
			}
		})


	});
	$('#editCategory').click(function(event)
	{
		var data={};
		data.type = $('#catNameE').val();
		data.typenew = $('#catNameN').val();
		$.ajax
		({
			url: 'server.php?action=editCategory',
			type: 'POST',
			data: data,
			success: function (response) 
			{
				if(response !=0)
				{
					$("#result2").text('Category Updated');
				}
				else
				{
					$("#result2").text('Category not Updated');
				}
			}
		})

	});
	$('#removeCategory').click(function(event) 
	{
		var data={};
		data.type = $('#catNameR').val();
		$.ajax
		({
			url: 'server.php?action=removeCategory',
			type: 'POST',
			data: data,
			success: function (response)
			{
				if(response !=0)
				{
					$("#result3").text('Category Removed' );
				}
				else
				{
					$("#result3").text('Category not Removed' );
				}
			}
		})

	});


	$('#addSubCategory').click(function(event) 
	{
		addSubCategory();
	});
	$("#editSubCategory").click(function(event) {
		editSubCategory();
	});
	$("#removeSubCategory").click(function(event) {
		removeSubCategory();
	});

})

/*/*/////*/******/////******///////
	function listMainCategory()
	{
		$.ajax
		({
			url: 'server.php?action=listCategory',
			success: function (response) 
			{	
				data=JSON.parse(response);
				inthtml="";
				inthtml +="<select id='mainCat' name='mainCat' class='form-control txt'>";
				for (categoory in data) 
				{
					inthtml += "<option value="+data[categoory].type+">"+data[categoory].type+"</option>";
				}
				inthtml +="</select>";
				
				$("#mainCategory").html(inthtml);
				listSubCategory();	
					$("#mainCat").on('change',function(){
					listSubCategory();
				});		
				
			},
			error: function (error) {
				console.log(error);
			}

		});
		

	}

	function listSubCategory()
	{
		var data={};
		data.type=$('select[name="mainCat"] :selected').val();
		$.ajax
		({
			url: 'server.php?action=listSubCategory',
			type: 'POST',
			data: data,
			success: function(response) 
			{	
				result=JSON.parse(response);

				inthtml="";
				inthtml +="<select id='subCat' name='subCat' class='form-control txt'>";
				for (categoory in result) 
				{
					inthtml += "<option value="+result[categoory].type+">"+result[categoory].type+"</option>";
				}
				inthtml +="</select>";
				$("#subCategory").html(inthtml);
				
			},
			error: function (error) 
			{
				console.log(error);
			}


		});		

	}
	function addSubCategory()
	{
		var data={};
		data.typeMain = $('select[name="mainCat"] :selected').val();
		data.typeSub=$('#subCatName').val();
		$.ajax
		({
			url: 'server.php?action=addSubCategory',
			type: 'POST',
			data: data,
			success: function (response) 
			{
				if(response !=0)
				{
					$("#result4").text('Sub Category inserted' );
				}
				else
				{
					$("#result4").text('Sub Category not inserted' );
				}
			}
		})

	}
	function editSubCategory()
	{
		var data={};
		data.typeMain = $('select[name="mainCat"] :selected').val();
		data.typeSub=$('select[name="subCat"] :selected').val();
		data.typeSubNew=$('#subCatName').val();
		$.ajax
		({
			url: 'server.php?action=editSubCategory',
			type: 'POST',
			data: data,
			success: function (response) 
			{
					if(response !=0)
				{
					$("#result4").text('Sub Category Updated' );
				}
				else
				{
					$("#result4").text('Sub Category not Updated' );
				}
			}
		})

	}

	function removeSubCategory()
	{
		var data={};
			data.typeMain = $('select[name="mainCat"] :selected').val();
			data.typeSub=$('select[name="subCat"] :selected').val();
			//console.log(data);
		$.ajax
		({
			url: 'server.php?action=removeSubCategory',
			type: 'POST',
			data: data,
			success: function (response) 
			{
					if(response !=0)
				{
					$("#result4").text('Sub Category Removed' );
				}
				else
				{
					$("#result4").text('Sub Category not Removed' );
				}
			}
		});

	}


	function addProduct()
	{
		var data={};
		data.typeMain = $('select[name="lmainCat"] :selected').val();
		data.typeSub=$('select[name="lsubCat"] :selected').val();
		data.color=$('select[name="color"] :selected').val();
		data.price=$('#price').val();
		data.qty=$('#quantity').val();
		data.material=$('select[name="material"] :selected').val();
		data.size=$('select[name="sizeProduct"] :selected').val();
		$.ajax
		({
			url: 'server.php?action=addProduct',
			type: 'POST',
			data: data,
			success: function (response) 
			{
				if(response !=0)
				{
					$("#result5").text('Product inserted' );
				}
				else
				{
					$("#result5").text('Product not inserted' );
				}
			}
		});
	}
function listMainCat()
	{
		$.ajax
		({
			url: 'server.php?action=listCat',
			success: function (response) 
			{	
				data=JSON.parse(response);
				inthtml="";
				inthtml +="<select id='lmainCat' name='lmainCat' class='form-control txt'>";
				for (categoory in data) 
				{
					inthtml += "<option value="+data[categoory].type+">"+data[categoory].type+"</option>";
				}
				inthtml +="</select>";
				$("#mainProduct").html(inthtml);


				listSubCat();
				$("#lmainCat").on('change',function(){
					listSubCat();
				});
				$("#addProduct").click(function(event) {
					addProduct();
				});
			},
			error: function (error) {
				console.log(error);
			}

		});
		

	}

	function listSubCat()
	{
		var data={};
		data.type=$('select[name="lmainCat"] :selected').val();
		$.ajax
		({
			url: 'server.php?action=listSubCat',
			type: 'POST',
			data: data,
			success: function(response) 
			{	
				result=JSON.parse(response);

				inthtml="";
				inthtml +="<select id='lsubCat' name='lsubCat' class='form-control txt'>";
				for (categoory in result) 
				{
					inthtml += "<option value="+result[categoory].type+">"+result[categoory].type+"</option>";
				}
				inthtml +="</select>";
				$("#subProduct").html(inthtml);
				
			},
			error: function (error) 
			{
				console.log(error);
			}


		});		

	}

function listUser()
{
	$.ajax
	({
		url: 'server.php?action=listusers',
		success: function (response) 
		{	
			data=JSON.parse(response);
			inthtml="";
			inthtml +="<table class='table table-bordered table-hover'><tr><th>Name</th><th>Username</th><th>Email</th><th>Password</th><th>Birthdate</th><th>Address</th></tr>";
			for (user in data) 
			{
				inthtml +="<tr>";
				inthtml += "<td><a href=data.php?id="+data[user].id+">"+data[user].name+"</a></td>";
				inthtml += "<td>"+data[user].username+"</td>";
				inthtml += "<td>"+data[user].email+"</td>";
				inthtml += "<td>"+data[user].password+"</td>";
				inthtml += "<td>"+data[user].birthdate+"</td>";
				inthtml += "<td>"+data[user].address+"</td>";
				inthtml +="</tr>";
			}
			inthtml +="</table>";
			$("#user").html(inthtml);

		},
		error: function (error) {
			console.log(error);
		}

	});
		

}

function editProductByPrice()
{
	var data={};
	data.pid = $('#pid').val();
	data.nprice=$('#nprice').val();

	$.ajax
	({
		url: 'server.php?action=editPrice',
		type: 'POST',
		data: data,
		success: function (response) 
		{
			if(response !=0)
			{
			}
			else
			{
			}
		}
	})

}

function editProductByQty()
{
	var data={};
	data.pid = $('#pid').val();
	data.nqty=$('#nqty').val();

	$.ajax
	({
		url: 'server.php?action=editQty',
		type: 'POST',
		data: data,
		success: function (response) 
		{
			if(response !=0)
			{
			}
			else
			{

			}
		}
	})

}

function listProduct()
{
	$.ajax
	({
		url: 'server.php?action=listproducts',
		success: function (response) 
		{	
			data=JSON.parse(response);
			inthtml="";
			inthtml +="<table class='table table-bordered table-hover'><tr><th>ID</th><th>Price</th><th>Color</th><th>Discount</th><th>Material</th><th>Quantity</th><th>Size</th></tr>";
			for (product in data) 
			{
				inthtml +="<tr>";
				inthtml += "<td><a href=prod_data.php?id="+data[product].id+">"+data[product].id+"</a></td>";
				inthtml += "<td>"+data[product].price+"</td>";
				inthtml += "<td>"+data[product].color+"</td>";
				inthtml += "<td>"+data[product].discount+"</td>";
				inthtml += "<td>"+data[product].material+"</td>";
				inthtml += "<td>"+data[product].qty+"</td>";
				inthtml += "<td>"+data[product].size+"</td>";
				inthtml +="</tr>";
			}
			inthtml +="</table>";
			$("#prods").html(inthtml);

		},
		error: function (error) {
			console.log(error);
		}

	});
		

}