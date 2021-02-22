<?php
		$Uname ="";
		$err_Uname="";

		$pass = "";
		$err_pass = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_POST["uname"])) {
			$err_Uname = "Username required";
		}
		else{

		}
		if (empty($_POST["pass"])) {
			$err_pass = "Password required";
			
		}else{

		}



	echo "Name: ".$_POST["name"]."<br>";
	echo "Username: ".$_POST["uname"]."<br>";
	echo "Password: ".$_POST["pass"]."<br>";
	echo "Confirm Password: ".$_POST["cpass"]."<br>";
	}
	?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	
	<h1>Club Member Registration</h1>
	<form action="" method="POST">
		<table>

			<tr>
				<td><span>Name</span></td>
				<td>:<input type="text" name="name"></td>
			</tr>

			<tr>
				<td><span>Username</span></td>
				<td>:<input type="text" name="uname" ><br>
					<span><?php echo "$err_Uname";?></span>
				</td>
			</tr>

			<tr>
				<td><span>Password</span></td>
				<td>:<input type="Password" name="pass"><br>
					<span><?php echo "$err_pass";?></span>
				</td>
			</tr>

			<tr>
				<td><span>Confirm Password</span></td>
				<td>:<input type="Password" name="cpass"></td>
			</tr>

			<tr>
				<td><span>Email</span></td>
				<td>:<input type="Email"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="SUBMIT">
				</td>
			</tr>
		</table>
		
	</form>

</body>
</html>