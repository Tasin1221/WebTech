<?php

	require_once 'model/DB_config.php';
	
	$bname = "";


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$bname = $_POST["bname"];

		$query = "DELETE FROM bustype WHERE busname='$bname'";
		execute($query);
	}

?>