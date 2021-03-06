<?php 
	Class User{

		var $id;
		var $name;
		var $user_name;
		var $email;
		var $password;
		var $birthdate;
		var $credit;
		var $address;
		var $interest;
		var $job;

		private static $conn = Null;

		function __construct($id=-1)
		{
			if(self::$conn == Null) 
			{
				self::$conn = mysqli_connect('localhost','root','iti','clothes_shop');
			}

			if($id!=-1)
			{
				$query = "select * from users where id=$id";
				$result = mysqli_query(self::$conn,$query);
				$user_result = mysqli_fetch_assoc($result);
				$this->id = $user_result['id'];
				$this->name = $user_result['name'];
				$this->user_name = $user_result['username'];
				$this->email = $user_result['email'];
				$this->password = $user_result['password'];
				$this->birthdate = $user_result['birthdate'];
				$this->credit = $user_result['credit'];
				$this->interest=$user_result['interest'];
				$this->address=$user_result['address'];
			}
		}
		
		function if_exist($user_name) 
		{
			$query = "select id from users where username='$user_name'";
			$result = mysqli_query(self::$conn,$query);
			return mysqli_fetch_assoc($result);
			//return (mysqli_num_rows($result)>0)?true:false ;
		}


		/*new */
		function username_exist($user_name) 
		{
			$query = "select id from users where username='$user_name'";
			$result = mysqli_query(self::$conn,$query);
			//return mysqli_fetch_assoc($result);
			return (mysqli_num_rows($result)>0)?true:false ;
		}


		/*new */
		function email_exist($email) 
		{
			$query = "select id from users where email='$email'";
			$result = mysqli_query(self::$conn,$query);
			//die($query);
			//return mysqli_fetch_assoc($result);
			return (mysqli_num_rows($result)>0)?true:false ;
		}


		/*new */
		function password_exist($password,$user_name) 
		{
			$query = "select id from users where password='$password' and 
						(username='$user_name' or email='$user_name') limit 1";
			$result = mysqli_query(self::$conn,$query);
			//return mysqli_fetch_assoc($result);
			return (mysqli_num_rows($result)>0)?true:false ;
		}




		/*new */
		function insert() 
		{
			$query = "insert into users(name,username,email,password,birthdate,credit,userType,address,interest) values('$this->name','$this->user_name','$this->email','$this->password','$this->birthdate','$this->credit','user','$this->address','$this->interest')";
			$result  = mysqli_query(self::$conn,$query);
			return mysqli_insert_id(self::$conn);
		}

		function user_view($user_name) 
		{
			$query = "select * from users where username = '$user_name' ";
			$result = mysqli_query(self::$conn,$query);
			return mysqli_fetch_assoc($result);
		}

		
		function getUser($username) {
		$query = "select * from users where username='$username' limit 1";
		$result = mysqli_query(self::$conn,$query);
		$data = mysqli_fetch_assoc($result);
		return $data;
		
		}
		function update_credit($id,$credit)
		{
			 $query="update  users set creditlimit='$credit' where id='$id'";
			$result=mysqli_query(self::$conn,$query);
		}
		function users() {
		$query = "select * from users";
		$result = mysqli_query(self::$conn,$query);
		$data = [];

		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
		
		
		}
	
	function editName($id,$ename)
		{
			$query = "update users set name='$ename' where id='$id'";
			$result=mysqli_query(self::$conn,$query);
			return mysqli_affected_rows($result);

		}
		function editBirth($id,$ebirth)
		{
			$query = "update users set birthdate='$ebirth' where id='$id'";
			$result=mysqli_query(self::$conn,$query);
			return mysqli_affected_rows($result);

		}

		function editPassword($id,$epassword)
		{
			$query = "update users set password='$epassword' where id='$id'";
			$result=mysqli_query(self::$conn,$query);
			return mysqli_affected_rows($result);

		}
		function editCredit($id,$credit)
		{
			$query = "update users set credit='$credit' where id='$id'";
			$result=mysqli_query(self::$conn,$query);
			return mysqli_affected_rows($result);

		}

	


	}


?>
