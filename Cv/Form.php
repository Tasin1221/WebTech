<?php
		$Uname ="";
		$err_Uname="";
		$pass= "";
		$err_pass = "";
		$Phone = "";
		$err_Phone = "";
		$Email ="";
		$err_Email = "";




	if ($_SERVER["REQUEST_METHOD"] == "POST") {



		if(empty($_POST["uname"]) || strlen($_POST["uname"]) <= 6) {
			$err_Uname = "Username must contain at least 6 characters";
		}
		else{
			$Uname = $_POST["uname"] ;
		}



		if (empty($_POST["pass"])) {
			$err_pass = "Password required";
			
		}else{




		}if (empty($_POST["Phone"]) || is_numeric($_POST["Phone"])) {
			$Phone = $_POST["Phone"];
			//$err_Phone = "Phone Number must be contained Numeric value" ;
		}else{
			$err_Phone = "Phone Number must be contained Numeric value" ;
			//$Phone = $_POST["Phone"];
		}


		if (condition) {
			# code...
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
				<td>:<input type="text" name="Email" placeholder="Enter Your E-mail"></td>
			</tr>

			<tr>
				<td><span>Phone</span></td>
				<td>:<input type="string" placeholder="Phone Number" name="Phone" value="<?php echo "$err_Phone";?>"></td>
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
				<td><span>Birth Date:</span></td>
				<td>
					<select>
						<option disabled selected> Day </option>
						<?php 
							for ($i=1; $i<=31; $i++){
    													
  					      ?> <option value="<?php echo $i;?>"><?php echo $i;?> </option><?php
 						   }
						 ?>
					</select>
				</td>

				<td>
					
					<select size="1" name="month">
							
							<option selected value="January">January</option>
							<option value="February">February</option>
							<option value="March">March</option>
							<option value="April">April</option>
							<option value="May">May</option>
							<option value="June">June</option>
							<option value="July">July</option>
							<option value="August">August</option>
							<option value="September">September</option>
							<option value="October">October</option>
							<option value="November">November</option>
							<option value="December">December</option>

					</select>

				</td>

				<td>
					<select>
						<option disabled selected> Year </option>
						<?php 
							for ($i=1950; $i<=2025; $i++){
    													
  					      ?> <option value="<?php echo $i;?>"><?php echo $i;?> </option><?php
 						   }
						 ?>
					</select>
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