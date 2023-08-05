<?php  
	$Name=$_POST['StuName'];
	$DOB=$_POST['dateBirth'];
	$Gender=$_POST['SGender'];
	$AdharNo=$_POST['numAdhar'];
	$BG=$_POST['BG'];
	$MName=$_POST['MName'];
	$FName=$_POST['FName'];
	$Eid=$_POST['mailEmail'];
	$Contact=$_POST['numContact'];
	$Address=$_POST['Saddress'];
	$PIN=$_POST['SPIN'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'r_database');
	$q="Insert Into r_list(SName,DOB,Gender,AdharNo,C_F_A,Mother_Name,Father_Name,Email_Id,Contact_No,Address,PIN)values('$Name','$DOB','$Gender','$AdharNo','$BG','$MName','$FName','$Eid','$Contact','$Address','$PIN')";
	$Status=mysqli_query($con,$q);
	mysqli_close($con);
?>
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
 	<p style="font-size:34px;">Registration Status:</p>
 	<?php 
 	if($Status==1)
 	echo "Done"; 
 	else
 	echo "Failed";
 ?>
 <button><a href="Office.php">To do More</a></button>
</body>
 </html>
 