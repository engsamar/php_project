<?php 

	include 'user.php';

	if($_SERVER['REQUEST_METHOD']=='GET')
	{
		switch ($_GET["action"])
		{
			case 'validateUsername':
				$user = new User;
				$result=$user->username_exist($_GET['user_name']);
				echo $result;
				break;

			case 'validateEmail':
				$user = new User;
				$result=$user->email_exist($_GET['email']);
				echo $result;
				break;
		}
	}
	

	else
	{
		$user = new User;
		$user->name = $_POST['name'];
		$user->user_name = $_POST['username'];
		$user->email = $_POST['email'];
		$user->password = $_POST['password'];
		$user->birthdate = $_POST['birthdate'];
		$user->credit = $_POST['credit'];
		$user->address = $_POST['address'];
		$user->interest = $_POST['interest'];

		$result = $user->insert();

		if($result != 0)
		{
			session_start();
			$_SESSION['login_user'] = $_POST['username'];
		}
		echo $result;
	 }
	

 ?>
