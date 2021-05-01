<?php
	require_once 'controller/signup_controller.php';
?>


<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			boarder :5px;
			background: #f0f0f0;
		}
	</style>
</head>
<body>
	<div align="center">
		<h1>REGISTRATION</h1>
		<form method="post" action="" onsubmit="return validate()">
			<table>
				<tr>
					<td><span>UserName</span></td>
					<td>:<input type="text" name="uname" placeholder="UserName" id="uname"></td>
				   	<td><span id="err_uname"><?php echo $err_uname;?></span> 
				</tr>
				<tr>
					<td><span>Password</span></td>
					<td>:<span><input type="Password" name="pass" placeholder="Password" id="password"></span></td>
					<td>
						<span id="err_pass"><?php echo $err_pass;?></span>
					</td>
				</tr>
				<tr>
					<td><span>Email</span></td>
					<td>:<input type="text" name="email" placeholder="Email" id="email"></td>
					<td>
						<span id="err_email"><?php echo $err_email;?></span>
					</td>
				</tr>
				<tr>
					<td><span>Phone Number</span></td>
					<td>:<span><input type="string" name="phone" placeholder="PhoneNumber" id="phone"></span></td>
					<td>
						<span id="err_phone"><?php echo $err_phone; ?></span>
					</td>
				</tr>
				<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio" name="Gender" >Male 
						<input type="radio" name="Gender">Female 
				</td>
				</tr>
				<tr>
					<td><span>Address</span></td>
					<td>:<input type="text" placeholder="Street Address">
						<input type="text" placeholder="City"> 
						<input type="text" placeholder="State">
						<input type="text" placeholder="PostalCode">
					</td>
						
				</tr>

				<tr>
					<td><input type="submit" value="Sign Up"></td>
					
				</tr>


			</table>
		</form>
	</div>

</body>

<script src="js/Validation.js"></script>


</html>