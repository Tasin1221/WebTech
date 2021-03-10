
<!DOCTYPE html>
<html>
<head>

	<style>
		body{
			background-color: rgb(223, 230, 111);
		}
		
		.login-div{
			border: 1px solid black;
			margin: auto;
			width: 25% ;
			margin-top: 16% ;
			background-color: rgb(223, 230, 111);
			background-image: url(background.jpg);

		}
		.my-font{
			font-family: consolas;

		}
		.btn-mine{
			background-color: rgb(51, 51, 0);
			width: 360% ;
			border: none;
			size: 3px;
			padding: 5px;
		}
		.btn-mine:hover{
			background-color: rgb(26,26,0);
		}
		.btn-mine:active{
			background-color: rgb(51, 204, 51);
		}

	</style>
</head>
<body>
	<div class="login-div">
		<h1 align="center" class="my-font">Log in Form</h1>
		<form action="Display.php" method="post">
			<table align="center">
				<tr>
					<td><span class="my-font" style="color: rgb(17, 51, 0);">Username</span></td>
					<td>:<input type="text" placeholder="Username" name="Uname"></td>
				</tr>
				<tr>
					<td><span class="my-font">Password</span></td>
					<td>:<input type="Password" placeholder="Password"></td>
				</tr>
				<tr colspan="2">
					<td><input type="submit" value="Login" class="my-font btn-mine"></td>
				</tr>
			</table>
		</form>
	</div>

</body>
</html>