<?php
	$PPassword=$_POST['Password1'];
	$NwPassword=$_POST['NPassword'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'r_database');
	$q="update user SET Password='$NwPassword' where Password='$PPassword' ";	
	$result=mysqli_query($con,$q);
	mysqli_close($con);
	if($result)
	{
		echo "password changed Successfully";
	}
	else
		echo "Incorrect Password! Try Again";
?>
<html>
<head>
	<title>VVN</title>
	<link rel="stylesheet" type="text/css" href="css/master.CSS">
</head>
<body>
	<header><p><B><img src="image/2.jpeg">VINAY VIDHYA NIKETAN</B></p></header>
	<a href="home.html">Go to Home Page</a>
</body></html>