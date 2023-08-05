<?php
	session_start();
	session_destroy();
	?>
	<script type="text/javascript">alert("Success full logout");</script>
	<?php
	header('location:http://localhost/Register/Login.php');
	?>
?>