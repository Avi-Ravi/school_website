<?php
	$id=$_POST['Ddata'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'r_database');
	$le="select * From r_list where RegNo=$id";
	$res=mysqli_query($con,$le);
	$num=mysqli_num_rows($res);
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
	if($num!=0)
	{
?>
<table border="1">
	<tr>
		<th>Registration No</th>
		<th>Student Name</th>
		<th>Date Of Birth</th>
		<th>Gender</th>
		<th>Adhar No</th>
		<th>Class For Admission</th>
		<th>Mother's Name</th>
		<th>Father's Name</th>
		<th>Email Id</th>
		<th>Contact No</th>
		<th>Address</th>
		<th>PIN</th>
	</tr>
	<?php 
 			for($i=0;$i<$num;$i++)
 			{
 				$row=mysqli_fetch_array($res);
 	?>
 	<tr>
 		<td><?php echo $row['RegNo']; ?></td>
 		<td><?php echo $row['SName']; ?></td>
 		<td><?php echo $row['DOB']; ?></td>
 		<td><?php echo $row['Gender']; ?></td>
 		<td><?php echo $row['AdharNo']; ?></td>
 		<td><?php echo $row['C_F_A']; ?></td>
 		<td><?php echo $row['Mother_Name']; ?></td>
 		<td><?php echo $row['Father_Name']; ?></td>
 		<td><?php echo $row['Email_Id']; ?></td>
 		<td><?php echo $row['Contact_No']; ?></td>
 		<td><?php echo $row['Address']; ?></td>
 		<td><?php echo $row['PIN']; ?></td>
 	</tr>
 <?php } ?>
<?php }?>
<?php
	if($num==0)
		echo "Details not available";
?>
</table>
<button><a href="Office.php">To do More</a></button>
</body>
</html>



