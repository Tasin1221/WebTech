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
			$Uname = $_POST["uname"] ;

		}
		if (empty($_POST["pass"])) {
			$err_pass = "Password required";
			
		}else{


		}



//	echo "Name: ".$_POST["name"]."<br>";
//	echo "Username: ".$_POST["uname"]."<br>";
//	echo "Password: ".$_POST["pass"]."<br>";
//	echo "Confirm Password: ".$_POST["cpass"]."<br>";
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
				<td>:<input type="text" name="name" placeholder="Name"></td>
			</tr>

			<tr>
				<td><span>Username</span></td>
				<td>:<input type="text" name="uname" value ="<?php echo "$Uname"; ?>" placeholder="Username"> <br>
					<span><?php echo "$err_Uname";?></span>
				</td>
			</tr>

			<tr>
				<td><span>Password</span></td>
				<td>:<input type="Password" name="pass" placeholder="Password"><br>
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
				<td><span>Phone</span></td>
				<td>:<input type="tel" id="Phone" placeholder="Phone Number"></td>
			</tr>

			<tr>
				<td><span>Gender</span></td>
				<td>:<input type="radio" name="Gender" >Male
					<input type="radio" name="Gender">Female <br> <br> <br>
				</td>
			</tr>

			<tr>
				<td><span>Where did you hear about us?</span></td>
				<td><input type="checkbox"> Google <br>
					<input type="checkbox" > Blog Post <br>
					<input type="checkbox" > News Article <br>
					<input type="checkbox" > A friend or colleague 
					</td>
			</tr>

			<tr>
				<td><span>Bio:</span></td>
				<td><textarea name="Bio"></textarea></td>
			</tr>









			<tr>
				<td>
					<input type="submit" value="Register">
				</td>
			</tr>



		</table>
		
	</form>

</body>
</html>