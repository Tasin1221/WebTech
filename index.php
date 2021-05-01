<?php
	$Uname="";
	$pass="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$Uname = $_POST["Uname"];
		$pass = $_POST["pass"];
		if ($Uname == "tasin" && $pass == "12345") {
			//session_start();
			//$_SESSION["user"]=$Uname;
			setcookie("user",$Uname,time()+120,"/");
			header("Location: dashboard.php");
			
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="Uname" placeholder="UserName">
		<input type="password" name="pass" placeholder="password">
		<input type="submit" value="LogIn">
		
	</form>
</body>
</html>