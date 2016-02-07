<?php 
	include 'mainCategory.php';
	include 'subCategory.php';
	include 'product.php';
	include 'user.php';
	

	switch ($_GET['action']) {
		case 'listproducts':
			$product =new Product();
			$result=$product->products();
			echo json_encode($result);		

		break;
		case 'editPrice':
			$product= new Product();
			$id=$_POST['id'];
			$price=$_POST['eprice'];
			$result=$product->editProductByPrice($price,$id);
			echo $result;

		break;
		case 'editQty':
			$product= new Product();
			$id=$_POST['id'];
			$qty=$_POST['qty'];
			$result=$product->editProductByQty($qty,$id);
			echo $result;

		break;

		case 'editDiscount':
			$product= new Product();
			$id=$_POST['id'];
			$discount=$_POST['ediscount'];
			$result=$product->editProductByDiscount($discount,$id);
			echo $result;

		break;

		//////////////////////

		case 'listusers':
			$user=new User();
			$allUser=$user->users();
			echo json_encode($allUser);		

		break;

		case 'editusername':
			$user=new User();
			$id=$_POST['id'];
			$ename=$_POST['ename'];
			$result=$user->editName($id,$ename);
			echo $result;

		break;

		case 'editbirth':
			$user=new User();
			$id=$_POST['id'];
			$ebirth=$_POST['ebirth'];
			$result=$user->editBirth($id,$ebirth);
			echo $result;

		break;
		case 'editusercredit':
			$user=new User();
			$id=$_POST['id'];
			$ecredit=$_POST['ecredit'];
			$result=$user->editCredit($id,$ecredit);
			echo $result;

		break;

		case 'checkCat' :
			$category=new MainCategory();
			$category->type = $_POST['type'];
			echo $category->if_exist();

		break;

		case 'addCategory':
			# code...
			$category=new MainCategory();
			$category->type = $_POST['type'];
			$result= $category->if_exist();
			if($result==0)
			{
				echo $category->insertMainCategory();
			}
			break;
		case 'editCategory':
			# code...
			$category=new MainCategory();
			$category->type = $_POST['type'];
			$result= $category->if_exist();
			if($result !=0)
			{
				//found
				$result=$category->getIdCategory();
				$category->id=$result['id'];
				$category->type = $_POST['typenew'];
				echo $category->updateMainCategory();
			}
			break;

			case 'removeCategory':
			# code...
			$category=new MainCategory();
			$category->type = $_POST['type'];
			$result= $category->if_exist();
			if($result !=0)
			{
				//found
				echo $category->removeMainCategory();
			}
			
			break;
		case 'addSubCategory':
		# code...
			$mainCategory =new MainCategory();
			$mainCategory->type = $_POST['typeMain'];
			$result=$mainCategory->getIdCategory();
			$cat_id=$result['id'];

			$subCategory =new SubCategory();
			$subCategory->category_id=$cat_id;
			$subCategory->type=$_POST['typeSub'];

			$data =$subCategory->if_exist();
			if($data==0)
			{
				// not found
				echo $subCategory->insertSubCategory();
			}

		break;

		case 'editSubCategory':
			# code...
			$category=new MainCategory();
			$category->type = $_POST['typeMain'];
			$result=$category->getIdCategory();
			$subCategory =new SubCategory();
			$subCategory->category_id=$result['id'];
			$subCategory->type=$_POST['typeSub'];
			$result=$subCategory->getSubCatId();
			if($result['id'] !=0)
			{
				//found		
				$subCategory->id=$result['id'];
				$subCategory->type = $_POST['typeSubNew'];
				echo $subCategory->updateSubCategory();
				echo "Data updated" ;
			}
			break;

			case 'removeSubCategory':
			# code...
			$category=new MainCategory();
			$category->type = $_POST['typeMain'];
			$result=$category->getIdCategory();
			$subCategory =new SubCategory();
			$subCategory->category_id=$result['id'];
			$subCategory->type=$_POST['typeSub'];
			$result=$subCategory->getSubCatId();
			if($result['id'] !=0)
			{
				//found		
				$subCategory->id=$result['id'];
				echo $subCategory->removeSubCategory();
				echo "Data removed" ;
			}
			
			break;

		case 'listCategory':
		# code...
			$mainCategory =new MainCategory();
			$data =$mainCategory->getMainCategory();
			echo json_encode($data);
			break;

		case 'listSubCategory':
		# code...
			$mainCategory =new MainCategory();
			$mainCategory->type = $_POST['type'];
			$result=$mainCategory->getIdCategory();
			$cat_id=$result['id'];
			$subCategory =new SubCategory();
			$subCategory->category_id=$cat_id;
			$data =$subCategory->getSubCatByMainCat();
			echo json_encode($data);
			break;

		case 'listCat':
		# code...
			$mainCategory =new MainCategory();
			$data =$mainCategory->getMainCategory();
			echo json_encode($data);
			break;

		case 'listSubCat':
		# code...
			$mainCategory =new MainCategory();
			$mainCategory->type = $_POST['type'];
			$result=$mainCategory->getIdCategory();
			$cat_id=$result['id'];
			$subCategory =new SubCategory();
			$subCategory->category_id=$cat_id;
			$data =$subCategory->getSubCatByMainCat();
			echo json_encode($data);
			break;
		case 'addProduct':
		# code...

			$mainCategory =new MainCategory();
			$mainCategory->type = $_POST['typeMain'];
			$result=$mainCategory->getIdCategory();
			$cat_id=$result['id'];

			$subCategory =new SubCategory();
			$subCategory->category_id=$cat_id;
			$subCategory->type=$_POST['typeSub'];
			$res=$subCategory->getSubCatId();
			$idSub=$res['id'];
			$product= new Product();
			$product->sub_id=$idSub;
			$product->material=$_POST['material'];
			$product->qty=$_POST['qty'];
			$product->price=$_POST['price'];
			$product->color=$_POST['color'];
			$product->size=$_POST['size'];

			echo $product->insertProduct();

		break;

		
		default:
			# code...
			break;
	}
?>
