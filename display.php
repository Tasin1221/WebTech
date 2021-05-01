<?php
		session_start();
		require_once 'DB_config.php';

		if(!isset($_SESSION["loggedin"])){
			header("Location: login.php");
		}
		
		$query = "select * from user";
		
		$result = get($query);
?>
		<table>
			<tr>
				<th>UserName</th>
				<th>Age</th>
				<th>Password</th>
			</tr>
<?php
	
	echo $_SESSION["loggedin"];
	foreach ($result as $row) {
		echo "<tr>";
						echo "<td>".$row["username"]."</td>";
						echo "<td>".$row["age"]."</td>";
						echo "<td>".$row["password"]."</td>";
						echo "</tr>";
	}

?>
		</table>
		