<?php
	
	$errId=null;
	$errPass=null;
	$errConPass=null;
	$errName=null;
	$errType=null;
	$errMatch=null;
	//$utype=null;

	if(isset($_POST['signup']))
	{
		$id=$_POST['id'];
		$password=$_POST['password'];
		$cnfirmpass=$_POST['cnfirmpass'];
		$name=$_POST['name'];
		$type=$_POST['utype'];

		//echo $utype;

		if(empty($id) == true)
		{
			$errId =  "empty Id";
		}
		if(empty($password) == true)
		{
			$errPass = " empty password";
		}
		else
		{
			if(empty($cnfirmpass) == true)
			{
				$errConPass =  " Confirm pass empty";
			}
			else
			{
				if($password != $cnfirmpass)
				{
					$errConPass =  "Password doesn't match";
				}
				else
				{
					//header('location:chkReg.php');
				}
			}
		}
		
		if(empty($name) == true)
		{
			$errName =  " empty name";
		}
		if(empty($type) == true)
		{
			$errType =  " empty user type";
		}

		/*if(empty($errId) == false) //&& $errPass!=null && $errConPass!=null && $errName!=null && $errType!=null)
		{
			header('location:chkReg.php');
		}
		else
		{
			header('location:registration.php');
		}*/

		if($errId == null && $errPass == null && $errConPass == null && $errName == null && $errType == null)
		{
			echo "Successfully Registered";
			$data =  $id." ".$password." ".$cnfirmpass." ".$name." ".$type."\r\n";

			$myfile=fopen('Userinfo.txt', 'a');
			fwrite($myfile, $data);
			fclose($myfile);
		}
		
	}

?>

<html>
	<head>
		<title>Registration</title>
	</head>
	<body>
	
		<center>
		<form method="POST" action="#">
		
		<input type="text" name="id" placeholder="ID"> <?=$errId ?><br><br>
		<input type="password" name="password" placeholder="Password"> <?=$errPass ?> <br><br>
		<input type="password" name="cnfirmpass" placeholder="Confirm Password"> <?=$errConPass ?><br><br>
		<input type="text" name="name" placeholder="Name"> <?=$errName ?> <br><br>
		User type <br>
		<input type="radio" name="utype" value="User" >User
		<input type="radio" name="utype" value="Admin" >Admin <br><?=$errType ?><br><br>
		<input type="submit" name="signup" value="SignUp"> &nbsp; <a href="signin.php">Sign In</a>
		</form>	

		</center>
		
		
	</body>
</html>