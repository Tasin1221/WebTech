<?php
	
	require_once 'model/DB_config.php';

	$bname = "";
	$dpt = "";
	$arv = "";
	$time = "";
	$type = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$bname = $_POST["bname"];
		$dpt = $_POST["dpt"];
		$arv = $_POST["arv"];
		$time = $_POST["time"];
		$type = $_POST["type"];


		$query = "insert into bustype values('$bname','$dpt','$arv','$time','$type')";

		execute($query);

	}


?>