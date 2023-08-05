<html>
<head>
	<title>VVN</title>
	<link rel="stylesheet" type="text/css" href="css/master.CSS">
	<link rel="stylesheet" type="text/css" href="css/Login.css">
	<script type="text/javascript">
		function validate(t)
		{
			var at= document.LoginF.Password1.value;
			if(at.length<=t)
				alert("Enter Password minimum "+t+" character.");
		}
	</script>
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
<div>
	<form action="Validation.php" method="post" name="LoginF">
<fieldset id="Office"><legend><b>Official Login</b></legend>
<table>
	<tr>
		<td colspan="2"><fieldset id="Label"><legend>User Name</legend>
		<input type="text" name="UserName" required></fieldset></td></tr>
	<tr>


		<td colspan="2"><fieldset id="Label"><legend>Password</legend>
		<input type="Password" name="Password1" onsubmit="validate(6)" required></fieldset></td></tr>
	<tr>
		<td colspan="2"><input type="submit" name="Submit" value="Login" id="Login"></td>
	</tr>
</table>
</fieldset>
</form>
</div>
</body>
</html>