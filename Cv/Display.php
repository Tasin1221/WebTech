<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Form Submitted</h1>
	<?php
	echo "Name: ".$_POST["name"]."<br>";
	echo "Username: ".$_POST["uname"]."<br>";
	echo "Password: ".$_POST["pass"]."<br>";
	echo "Confirm Password: ".$_POST["cpass"]."<br>";
	
	?>

</body>
</html>