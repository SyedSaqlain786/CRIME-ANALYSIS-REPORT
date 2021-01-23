<?php

	include_once("db.php");

	$sql="select * from Admin where uname='".$_POST['uid']."' and pwd='".$_POST['pwd']."'";
	$result=mysqli_query($con,$sql); //true if Succedded

	if(mysqli_num_rows($result) == 1) //Fetch atleast 1 row from db
	{
		//$_SESSION['SESS'] = $_POST['uid'];
		echo "<script>window.location = 'dashboard.php';</script>"; //Login Successful
	}
	else
	{
		echo "<script>alert('Invalid Details');</script>";
		echo "<script>window.location = 'index.php';</script>";
	}
mysqli_close($con);
?>