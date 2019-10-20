<?php

	session_start();
	if(isset($_SESSION))
	{


?>

<html>
	<head>
	
		<title>Home</title>
	</head>
	<body>
	
	<center>
		<h1>Welcome Bob!</h1>
		<a href="profile.html">Profile</a><br>
		<a href="changepassword.html">ChangePassword</a><br>
		<a href="userView.php">View User</a><br>
		<a href="logout.php">Logout</a><br>
	</center>
	
	</body>

</html>

<?php
	}
	else

	{
		header('location:signin.php');
	}
?>