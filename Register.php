<html>
<head>
	<title>VVN</title>
	<link rel="stylesheet" type="text/css" href="css/master.css">
	<link rel="stylesheet" type="text/css" href="css/Register.css">
	<script type="text/javascript" src="JScript/V_Login.javascript"></script>
</head>
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
<fieldset><legend><b>Registration Form</b></legend>
<form action="RBase.php" name="R_Form" method="post" >
<table id="rTable">
	<tr id="atrribute">
		<td id="record"><label>Student Name:</label></td>
		<td><input type="text" name="StuName" required onblur="characterV(2,3)"></td>
	</tr>
	<tr id="atrribute">
		<td id="record"><label>Date Of Birth:</label></td>
		<td><input type="Date" name="dateBirth" required></td>
	</tr>
	<tr>
		<td id="record"><label>Gender:</label></td>
		<td id="radioB"><input type="radio" name="SGender" value="M">Male<input type="radio" name="SGender" id="radioB" value="F">Female</td>
	</tr>
	<tr id="atrribute">
		<td id="record"><label>Adhar No:</label></td>
		<td><input type="text" name="numAdhar" maxlength="12"></td>
	</tr>
	<tr id="atrribute">

		<td id="record"><label>Class For Addmission:</label></td>
		<td><select name="BG" required>
		<option >Select class</option>
		<option value="Nur">Nursery</option>
		<option value="LKG">LKG</option>
		<option value="UKG">UKG</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		</select></td>
	</tr>
	<tr id="atrribute">
		<td id="record"><label>Mother's Name:</label></td>
		<td><input type="text" name="MName" size="50" required></td>
	</tr>
	<tr id="atrribute">
		<td id="record"><label>Father's Name:</label></td>
		<td><input type="text" name="FName" size="40" required></td>
	</tr>
	<tr id="atrribute">
		<td id="record"><label>Email Id:</label></td>
		<td><input type="Email" name="mailEmail"></td>
	</tr>
	<tr id="atrribute">
		<td id="record"><label>Contact No:</label></td>
		<td><input type="text" name="numContact" maxlength="10"></td>
	</tr>
	<tr id="atrribute">
		<td id="record"><label>Address:</label></td>
		<td><textarea rows="3" cols="40" name="Saddress"></textarea>
	</tr>
	<tr id="atrribute">
		<td id="record"><label>PIN:</label></td>
		<td><input type="text" name="SPIN" maxlength="6" required></td></tr>
	<tr id="atrribute">
		<td><input type="reset" name="clean" value="Reset" id="blank"></td>
		<td><input type="submit" value="Register" id="sub"></td></th></tr>
</table>
</form>
</fieldset>
</div>
</body>
</html>