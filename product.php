<?php 

class Product
{
	private static $conn = Null;
	
	function __construct($id=-1)
	{
		if(self::$conn == Null) 
		{
			self::$conn = mysqli_connect('localhost','root','iti','clothes_shop');
		}
		if($id!=-1) {
			$query = "select * from products where id=$id limit 1";
			$result = mysqli_query(self::$conn,$query);
			$product = mysqli_fetch_assoc($result);
			$this->id = $product['id'];
			$this->sub_id = $product['sub_id'];
			$this->price = $product['price'];
			$this->color = $product['color'];
			$this->discount = $product['discount'];
			$this->material = $product['material'];
			$this->qty = $product['qty'];
			$this->size = $product['size'];
		}

	}

	function getproduct($id)
	{
		$query = "select * from products where id='$id' limit 1";
		$result = mysqli_query(self::$conn,$query);
		$data = mysqli_fetch_assoc($result);
		return $data;
	}

	function insertProduct() {
		$query = "insert into products(sub_id,price,color,material,qty,size) values('$this->sub_id','$this->price','$this->color','$this->material','$this->qty','$this->size')";
		$result = mysqli_query(self::$conn,$query);
		return mysqli_insert_id(self::$conn);
	}

	function editProductByPrice($price,$id) {
		$query = "update products set price='$price' where id='$id'";
		$result  = mysqli_query(self::$conn,$query);
		return mysqli_affected_rows($result);
	}
	function editProductByQty($qty,$id) {
		$query = "update products set qty='$qty' where id='$id'";
		$result  = mysqli_query(self::$conn,$query);
		return mysqli_affected_rows($result);
	}

	function editProductByDiscount($discount,$id)
	{
		$query = "update products set discount='$discount' where id='$id'";
		$result  = mysqli_query(self::$conn,$query);
		return mysqli_affected_rows($result);
	}

	function products() {
		$query = "select * from products";
		$result = mysqli_query(self::$conn,$query);
		$data = [];

		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
	}

	function getProductByPrice($price) {
		$query = "select * from products where price >= $price";
		$result = mysqli_query(self::$conn,$query);
		$data = [];

		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
	}
	function getProductBySize($size) {
		$query = "select * from products where size = $size";
		$result = mysqli_query(self::$conn,$query);
		$data = [];

		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
	}
	function getProductByColor($color) {
		$query = "select * from products where color = $color";
		$result = mysqli_query(self::$conn,$query);
		$data = [];

		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
	}



}



 ?>