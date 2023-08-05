<?php
	session_start();
	$UserName=$_POST['UserName'];
	$Password=$_POST['Password1'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'r_database');
	$q="select * from user where UserName='$UserName' && Password='$Password'";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	if($num==1)
	{
		$_SESSION['UserName']=$UserName;
		header('location:http://localhost/Register/Office.php');
	}
	else
	{
		header('location:http://localhost/Register/Logout.php');

	}
	mysqli_close($con);
?>