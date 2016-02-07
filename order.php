<?php 
class Order
{
	var $user_id;
	var $order_id;
	var $product_id;
	var $product_price;
	var $qty;
	private static $conn = Null;
	
	function __construct($user_id=-1)
	{
		if(self::$conn == Null) 
		{
			self::$conn = mysqli_connect('localhost','root','iti','clothes_shop');
		}
		if($user_id!=-1)
		 {
			$query = "select * from user_order where user_id=$id limit 1";
			$result = mysqli_query(self::$conn,$query);
			$user = mysqli_fetch_assoc($result);
			$this->user_id = $user['user_id'];
			$this->order_id = $user['order_id'];
			$this->product_id = $user['product_id'];
			$this->product_price=$user['product_price'];
			$this->qty = $user['qty'];
		}
	}
	// *****
	function cartCal()
	{
		$query="select * from user_order;";
		$result=mysqli_query(self::$conn,$query);
		$data = [];

		while($row = mysqli_fetch_assoc($result)) 
		{
			$data[] = $row;
		}
		return $data;
	
	}
	// ****
	function GetOrderData($id)
	{
		$query="select  product_id,product_price,user_order.qty as qty,color,discount,material,size from user_order,products  where user_id='$id' and user_order.product_id=products.id;";
		$result=mysqli_query(self::$conn,$query);
		$data = [];

		while($row = mysqli_fetch_assoc($result)) 
		{
			$data[] = $row;
		}
		return $data;
	}

	function if_exist($id) 
	{
		
		$query = "select * from user_order where product_id='$id'";
		$result = mysqli_query(self::$conn,$query);
		return (mysqli_num_rows($result)>0)?True:False ;
	}
	


	function orderupdate($n,$id)
	{
		$query = "update user_order set  qty='$n' where product_id='$id'";
		$result = mysqli_query(self::$conn,$query);
	}
	function orderdelete($id)
	{
		$query="delete from user_order where user_id='$id'";
		$data =	mysqli_query(self::$conn,$query);
	}
	function productdelete($id)
	{
		$query="delete from user_order where product_id='$id'";
		$data =	mysqli_query(self::$conn,$query);
		
	}
	function orderadd($user_id,$id,$price)
	{
		$qeury="insert into user_order(user_id,product_id,product_price,qty) values($user_id,$id,$price,1)";
		$data = mysqli_query(self::$conn,$qeury);

	}
	function cart($id)
	{
		$qeury="select sum(qty) as s,sum(product_price) as p from user_order where user_id='$id'";
		$result = mysqli_query(self::$conn,$qeury);
		$data = mysqli_fetch_assoc($result);
		return $data;
		
	}
	function addcarttouser($sum,$item,$id)
	{
		$qeury="insert into users (sum,items) value('$sum','$item') where id='$id'";
		$result = mysqli_query(self::$conn,$qeury);
	}
}

?>