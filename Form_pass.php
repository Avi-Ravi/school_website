<html>
<head>
	<title>VVN</title>
	<link rel="stylesheet" type="text/css" href="css/master.CSS">
</head>
<style type="text/css">
	fieldset{
		float: left;
		background-color: rgba(152,24,71,23);
		border-radius: 10px;
		width: 400px;
	}
	input{
		width: 370px;
		height: 26px;
		border-radius: 5px;
	}
	#Login{
		width: 425px;
	}
</style>
<body>
	<header><p><B><img src="image/2.jpeg">VINAY VIDHYA NIKETAN</B></p></header>
<div>
	<form action="C_Password.php" method="post">
<fieldset><legend><b>Change Password</b></legend>
<table>
	<tr>
		<td colspan="2"><fieldset><legend>Current Password</legend>
		<input type="Password" name="Password1" required></fieldset></td>
	</tr>
	<tr>
		<td colspan="2"><fieldset><legend>New Password</legend>
		<input type="Password" name="NPassword" required></fieldset></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="Submit" value="OK" id="Login"></td>
	</tr>
</table>
</fieldset>
</form>
</div>
</body>
</html>