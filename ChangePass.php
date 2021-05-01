<?php
	session_start();
	if (!isset($_SESSION["user"])) {
		header("Location: index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Password Changed <?php echo $_SESSION["user"];?></h1>

</body>
</html>