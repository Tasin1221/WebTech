<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" type="text/css" href="style_admin.css">
</head>


<body>



<div id="header">
<center><img src="admin.jpg">
<h3> Welcome to Admin Panel</h3></center>
</div>

<div id="sidemenu">
 <ul>
    <li><a href="add.php" target="_blank"> Add Updates </a></li>
	<li><a href="delete.php" target="_blank"> Delete Update </a></li>
	<li><a href="update.php" target="_blank"> Update Post </a></li>
 </ul>	
</div>

<div id="data">
<br><br>

<center><h1>Data available</h1></center>
<?php
		
		require_once 'model/DB_config.php';

		$query = "select * from bustype";
		
		$result = get($query);

?>

<table boarder = "5px" >
			<tr>
				<th>BusName</th>
				<th>Departure</th>
				<th>Arrival</th>
				<th>Type</th>
			</tr>
<?php
	
	//echo $_SESSION["loggedin"];
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


</div>
</body>
</html>