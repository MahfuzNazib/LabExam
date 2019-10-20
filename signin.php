<?php
	
	if(isset($_POST['login']))
	{


		$mydata = fopen('Userinfo.txt', 'r');
		$data = fgets($mydata);
		fclose($mydata);

		$user = explode(" ", $data);

		$uid = $_POST['id'];
		$pass = $_POST['password'];

		if($user[0] == $uid && $user[1] == $pass )//&& $user[5] == "Admin")
		{
			$_SESSION['userid'] = $uid;
			$_SESSION['upass'] = $pass;
			header('location:AdminHome.html');
		}
		/*if($user[0] == $uid && $user[1] == $pass && $user[5] == "User")
		{
			header('location:UserHome.html');
		}
		else
		{
			echo "Incorrect username or password";
		}*/
	}
?>

<html>

	<head>
		<title>Login</title>
	</head>
	
	<body>
		<form method="POST" action="#">
			<center>
			User ID  : <input type="text" name="id"><br><br>
			Password : <input type="password" name="password"><br><br>
			<input type="submit" name="login" value="Login"> &nbsp; <a href="registration.php">Register</a>
		</center>
		</form>
		
	</body>
</html>