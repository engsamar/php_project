<?php 

class SubCategory
{
	var $id;
	var $category_id;
	var $type;
	private static $conn = Null;
	
	function __construct($id=-1)
	{
		if(self::$conn == Null) 
		{
			self::$conn = mysqli_connect('localhost','root','iti','clothes_shop');
		}
		if($id!=-1) {
			$query = "select * from sub_category where id=$id limit 1";
			$result = mysqli_query(self::$conn,$query);
			$user = mysqli_fetch_assoc($result);
			$this->id = $user['id'];
			$this->category_id = $user['category_id'];
			$this->type = trim($user['type']);
		}
	}

	function if_exist()
	{
		$query = "select * from sub_category where type='$this->type' AND category_id='$this->category_id'";
		$result = mysqli_query(self::$conn,$query);
		return  mysqli_num_rows($result);
	}

	function insertSubCategory() 
	{
		$query = "insert into sub_category values (null,'$this->category_id','$this->type')";
		$result  = mysqli_query(self::$conn,$query);
		return mysqli_insert_id(self::$conn);
	}

	function getSubCategory() 
	{
		$query = "select * from sub_category";
		$result = mysqli_query(self::$conn,$query);
		$data = [];

		while($row = mysqli_fetch_assoc($result)) 
		{
			$data[] = $row;
		}
		return $data;
	}
	function getSubCatByMainCat() 
	{
		$query = "select * from sub_category where category_id='$this->category_id' ";
		$result = mysqli_query(self::$conn,$query);
		$data = [];

		while($row = mysqli_fetch_assoc($result)) 
		{
			$data[] = $row;
		}
		return $data;
	}
	function updateSubCategory()
	{
		$query = "update sub_category set type='$this->type' where id='$this->id'";
		$result=mysqli_query(self::$conn,$query);
		return mysqli_affected_rows($result);
	}
	function getSubCatId()
	{
		$query = "select id from sub_category where type='$this->type' AND category_id='$this->category_id'";
		$result = mysqli_query(self::$conn,$query);
		return  mysqli_fetch_assoc($result);
	}
	function removeSubCategory()
	{
		$query = "delete from sub_category where id='$this->id'";
		$result  = mysqli_query(self::$conn,$query);
		return mysqli_affected_rows($result);		
	}




}



 ?>