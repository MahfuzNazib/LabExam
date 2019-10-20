<?php
	if(isset($_POST['signup']))
	{
		$id=$_POST['id'];
		$password=$_POST['password'];
		$cnfirmpass=$_POST['cnfirmpass'];
		$name=$_POST['name'];
		$type=$_POST['utype'];

		echo $id." ".$password." ".$cnfirmpass." ".$name." ".$type;
	}
?>