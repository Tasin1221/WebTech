<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!--	<table border="5" align="center">
		<tr>
			<td><b>ID</b></td>
			<td><b>NAME</b></td>
			<td><b>GPA</b></td>
		</tr>
		<tr>
			<td rowspan="2">1</td>
			<td>Rahim</td>
			<td>3.76</td>
		</tr>
		<tr>
			
			<td>Karim</td>
			<td>3.45</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Maruf</td>
			<td>3.12</td>
		</tr>
		
	</table>
-->



<h1 align="center">User Registration</h1>
<form align="center" action="Display.php" method="post">
	<span>UserName</span>:<input type="text" name="Uname"><br>
	<span>Password</span>:<input type="Password" name="Pass"><br>
	<span>Gender</span>:
		<input type="radio" name="Gender" value="Male"> Male
		<input type="radio" name="Gender" value="Female"> Female<br>
	<span>Hobbies</span>:
		<input type="checkbox" >Music 
		<input type="checkbox" >Movies 
		<input type="checkbox" >Playing <br>
	<span>Profession:</span> 
	<select>
		<option>Teaching</option>
		<option>Business</option>
		<option>Service</option>
	</select><br>
	<input type="submit" value ="submit">
</form>

</body>
</html>