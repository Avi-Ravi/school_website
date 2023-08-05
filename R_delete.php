<?php
	$id=$_POST['Ddata'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'r_database');
	$que="DELETE from r_list where RegNo=$id";
	mysqli_query($con,$que);
	$status=mysqli_query($con,$que);
	mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>VVN</title>
	<link rel="stylesheet" type="text/css" href="css/master.CSS">
</head>

<body>
	<header><p><B><img src="image/2.jpeg">VINAY VIDHYA NIKETAN</B></p></header>
<nav>
	<ul>
		<li><a href="Home.html">Home</a></li>
		<li><a href="Gallery.php"> Gallery</a></li>
		<li><a href="Register.php">Registration</a></li>
		<li><a href="AboutUs.php">About Us</a></li>
		<li><a href="ContactUs.php">Contact Us</a></li>
		<li><a href="Login.php">Management</a></li>
	</ul>
</nav>
<?php
	if($status==1)
		echo "Delete details Successfuly";
	else
		echo "Deletion Failed";
?>
<a href="Office.php"> Click to go back</a>
</body>
</html>