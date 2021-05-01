<?php
		session_start();
		require_once 'model/DB_config.php';

		if(!isset($_SESSION["loggedin"])){
			header("Location: login.php");
		}

		$from = "";
		$to = "";
		 if ($_SERVER["REQUEST_METHOD"] == "POST") {
		 	
		 	$from = $_POST["from"];
		 	$to = $_POST["to"];

		 	$query =  "select * from bustype where start = '$from' and end ='$to'";
		 	$result = get($query);


		 }
		
		
?>
		<table>
			<tr>
				<th>Bus Name</th>
				<th>Start</th>
				<th>End</th>
				<th>Type</th>
			</tr>
<?php
	
	echo $_SESSION["loggedin"];
	foreach ($result as $row) {
		echo "<tr>";
						echo "<td>".$row["busname"]."</td>";
						echo "<td>".$row["start"]."</td>";
						echo "<td>".$row["end"]."</td>";
						echo "<td>".$row["type"]."</td>";
						echo "</tr>";
	}

?>
		</table>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Where do you want to go?</h1>
	<form action="" method="post">
		From : <input type="text" name="from" placeholder="">
		To : <input type="text" name="to" placeholder="">
		<input type="submit" name="" value="Go">
	</form>


</body>
</html>