<?php 

include 'user.php';
	$user = new User;
	switch ($_GET['action'])
 	{
	case 'check':
	echo $_GET['password'];
	echo $_GET['userName'];
	$result=$user->password_exist($_GET['password'],$_GET['userName']);

	if ($result) 
	{
		session_start();
		$_SESSION['login_user'] = $_GET['userName'];
	
	}
	echo $result;
	break;
	
	case 'close':
	session_start();
	unset($_SESSION['login_user']);
	header("location: login.php");
	break;
}
	
?>
