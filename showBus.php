<?php
	require_once 'model/DB_config.php';

	$search = "";
	$btype = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){

	$search = $_POST["search"];
	$btype = $_POST["btype"];

	$query = "select * from bustype where busname = '$search' and type ='$btype'";
	$result = get($query);

	
}

?>
<table border="5px">
			<tr>
				<th>Bus Name</th>
				<th>Start</th>
				<th>End</th>
				<th>Type</th>
			</tr>
<?php
	
	
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
