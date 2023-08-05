<?php
	$Reg=$_POST['a'];
	$Name=$_POST['b'];
	$DOB=$_POST['c'];
	$Gender=$_POST['d'];
	$AdharNo=$_POST['e'];
	$BG=$_POST['f'];
	$MName=$_POST['g'];
	$FName=$_POST['h'];
	$Eid=$_POST['i'];
	$Contact=$_POST['j'];
	$Address=$_POST['k'];
	$PIN=$_POST['l'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'r_database');
	$q="Update r_list SET SName='$Name', DOB='$DOB', Gender='$Gender', AdharNo='$AdharNo' , C_F_A='$BG', Mother_Name='$MName', Father_Name='$FName', Email_Id='$Eid', Contact_No='$Contact', Address='$Address',PIN='$PIN' where RegNo=$Reg";
	$Status=mysqli_query($con,$q);
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
<p style="font-size:34px;">Updation Status:</p>
 	<?php 
 	if($Status==1)
 	echo "Done"; 
 	else
 	echo "Failed";
 ?>
 <button><a href="Office.php">To do More</a></button>
</body>
</html>
