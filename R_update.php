<?php
	$id=$_POST['Ddata'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'r_database');
	$le="select * From r_list where RegNo=$id";
	$res=mysqli_query($con,$le);
	mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>VVN</title>
	<link rel="stylesheet" type="text/css" href="css/master.CSS">
	<link rel="stylesheet" type="text/css" href="css/R_update.css">
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
<form action="R_updation.php" method="POST">
<table>
	<tr>
	<?php
 		$row=mysqli_fetch_array($res);?>
 	<tr>
 		<th>summary</th>
 		<th>Details</th>
 	</tr>
 	<tr>
 		<td id="HeadT">Registration No</td>
 		<td><input type="hidden" name="a" value="<?php echo $row['RegNo'];?>"/>can't update</td>
 	</tr>
 	<tr>
 		<td id="HeadT">Student Name</td>
 		<td><input type="text" name ="b" value="<?php echo $row['SName'];?>"/></td>
 	</tr>
 	<tr>
 		<td id="HeadT">Date Of Birth</td>
		<td><input type="text" name ="c" value="<?php echo $row['DOB'];?>"/></td>
	</tr>
	<tr>
		<td id="HeadT">Gender</td>
		<td><input type="text" name ="d" value="<?php echo $row['Gender'];?>"/></td>
	</tr>
	<tr>
		<td id="HeadT">Adhar No</td>
		<td><input type="text" name ="e" value="<?php echo $row['AdharNo'];?>"/></td>
	</tr>
	<tr>
		<td id="HeadT">Class For Admission</td>
		<td><input type="text" name ="f" value="<?php echo $row['C_F_A'];?>"/></td>
	</tr>
	<tr>
		<td id="HeadT">Mother's Name</td>
		<td><input type="text" name ="g" value="<?php echo $row['Mother_Name'];?>"/></td>
	</tr>
	<tr>
		<td id="HeadT">Father's Name</td>
		<td><input type="text" name ="h" value="<?php echo $row['Father_Name'];?>"/></td>
	</tr>
	<tr>
		<td id="HeadT">Email Id</td>
		<td><input type="text" name ="i" value="<?php echo $row['Email_Id'];?>"/></td>
	</tr>
	<tr>
		<td id="HeadT">Contact No</td>
		<td><input type="text" name ="j" value="<?php echo $row['Contact_No'];?>"/></td>
 	</tr>
 	<tr>
		<td id="HeadT">Address</td>
		<td><input type="text" name ="k" value="<?php echo $row['Address'];?>"/></td>
 	</tr>
 	<tr>
		<td id="HeadT">PIN</td>
		<td><input type="text" name ="l" value="<?php echo $row['PIN'];?>"/></td>
	</tr>
	<tr>
		<td><input type="reset" name="" value="Blank all"></td>
		<td><input type="submit" name="submit" value="Update"></td>
	</tr>
 </table>
</form>
</fieldset>
<a href="Office.php">Click to Back</a>
</body>
</html>