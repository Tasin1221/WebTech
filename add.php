<?php 

	require_once 'controller/add_bus_controller.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form align="center" method="post">
		<h1>Add Bus</h1>
		Bus Name : <input type="text" name="bname" placeholder="Add Bus Name"><br><br>
		Departure : <input type="text" name="dpt" placeholder="Enter city"><br><br>
		Arrival : <input type="text" name="arv" placeholder="Enter city"><br><br>
		Time : <input type="Time" name="time" placeholder="Time"><br><br>
		Type : <input type="text" name="type" placeholder="Ac/Non Ac"><br><br>


			   <input type="submit" name="" value="Enter">
	</form>
</body>
</html>