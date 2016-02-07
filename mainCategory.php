<?php 
class MainCategory
{
	private static $conn = Null;
	
	function __construct($id=-1)
	{
		if(self::$conn == Null) 
		{
			self::$conn = mysqli_connect('localhost','root','iti','clothes_shop');
		}
		if($id!=-1) 
		{
			$query = "select * from category where id=$id limit 1";
			$result = mysqli_query(self::$conn,$query);
			$mainCategory = mysqli_fetch_assoc($result);
			$this->id = $mainCategory['id'];
			$this->type = $mainCategory['type'];
		}
	}

	function if_exist()
	{
		//echo $this->type;
		$query = "select * from category where type='$this->type' limit 1";
		$result = mysqli_query(self::$conn,$query);
		//echo mysqli_num_rows($result);
		return  mysqli_num_rows($result);
	}
	function getIdCategory() 
	{
		$query = "select id from category where type='$this->type'";
		$result = mysqli_query(self::$conn,$query);
		return mysqli_fetch_assoc($result);
	}
	function removeMainCategory()
	{
		$query = "delete from category where type='$this->type'";
		$result  = mysqli_query(self::$conn,$query);
		return mysqli_affected_rows($result);
	}

	function insertMainCategory() 
	{
	//	echo $this->type;
		$query = "insert into category values(null,'$this->type')";
		$result = mysqli_query(self::$conn,$query);
		return mysqli_insert_id(self::$conn);
	}

	function getMainCategory() 
	{
		$query = "select * from category";
		$result = mysqli_query(self::$conn,$query);
		$data = [];

		while($row = mysqli_fetch_assoc($result))
		{
			$data[] = $row;
		}
		return $data;
	}

	function updateMainCategory()
	{
		$query = "update category set type='$this->type' where id='$this->id'";
		$result=mysqli_query(self::$conn,$query);
		return mysqli_affected_rows($result);
	}


}



 ?>