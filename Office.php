<?php
session_start();
if(!isset($_SESSION['UserName']))
	header('location:http://localhost/Register/Login.php');
?>
<!doctype HTML>
<html>
<head>
	<title>VVN</title>
	<link rel="stylesheet" type="text/css" href="css/master.CSS">
	<link rel="stylesheet" type="text/css" href="css/Office.css">
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
<div><ul><li>
	<h3 id="user">Well come,<?php echo $_SESSION['UserName']?></h3></li>
	<li><h3><a href="Logout.php" ><button>LogOut</button></a></h3></li>
	<li><h3><a href="Form_pass.php" ><button>Change Password</button></a></h3></li>
</ul>
	<fieldset id="Operation"><legend><b>Delete details</b></legend>
<form action="R_delete.php" method="post">
	<input id="box" type="text" name="Ddata" placeholder="Enter Regitration No:" required>
	<input id="hitme" type="submit" value="OK">
</form>
</fieldset>

<fieldset id="Operation"><legend><b>Update details</b></legend>
<form action="R_update.php" method="post">
	<input id="box" type="text" name="Ddata" placeholder="Enter Regitration No:" required>
	<input id="hitme" type="submit" value="OK">
</form>
</fieldset>

<fieldset id="Operation"><legend><b>Search details</b></legend>
<form action="R_search.php" method="post">
	<input id="box" type="text" name="Ddata" placeholder="Enter Regitration No:" required>
		<input id="hitme" type="submit" value="OK">
</form>
</fieldset>
<div>
<b>Registered Students</b>
<iframe src="RegisReport.php"></iframe></div>
</body>
</html>
