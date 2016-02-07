<?php
session_start();
include 'order.php';
$order=new Order();
include 'user.php';
$user=new User();
switch ($_GET['action'])
 {
	case 'add':
		$id =$_POST['id'];
		$price=$_POST['price'];
		echo $order->if_exist($id);
		
	if($order->if_exist($id))
	{
		$result=$order->GetOrderData($_SESSION['id']);
		foreach ($result as $key => $value)
		{
			$q=$value['qty'];
			
		}
		$n=$q+1;
		echo $n;
		$order->orderupdate($n,$id);
		
	}
	else
	{
		
		$order->orderadd($_SESSION['id'],$id,$price);
	}

	break;
	case 'del':
		$order->orderdelete($_SESSION['id']);
		
	break;
	case 'draw':
		

		$result=$order->GetOrderData();
		foreach ($result as $key => $value)
		{
			$data=$value['product_id'];
			
		}
		return $data;
	break;

	case 'DelThisOrder':
		$id=$_GET['pro_id'];
		
		// *******************
			
		$order->productdelete($id);
		

		


	break;
	case 'BuyThisOrder':
		$id=$_GET['pro_id'];
		$p=$_GET['p_price'];
		$q=$_GET['qty'];
		$price=$p*$q;
		
		// *******************
		$creditt=$_SESSION['credit'];
		
		if($creditt > $price)
		{
		$credit=$creditt - $price;
		$user->update_credit($_SESSION['id'],$credit);	
		$order->productdelete($id);
		}
		else
		{
			echo 1;
		}
		//credit user->check 
		
		


	break;
				

}

?>
