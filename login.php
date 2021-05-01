<?php
	// session_start();
	require_once 'controller/login_controller.php';

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" align="center">
		<h1>LOG IN</h1>
		<input type="text" name="uname" placeholder="UserName"><br><br>
		<input type="password" name="pass" placeholder="Password"><br><br>
		<input type="submit" value="Login"> <br> <a href="Registration.php">Not registration yet!</a>
	</form>
</body>
</html>