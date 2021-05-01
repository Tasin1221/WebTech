<?php
	session_start();
		require_once 'model/DB_config.php';


		$uname = "";
		$pass = "";


	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$uname = $_POST["uname"];
		$pass = $_POST["pass"];

		$query = "select * from user where username = '$uname' and password = '$pass' ";

		

		$result = get($query);




		


		

		if(count($result) > 0 ){
			$user = $result[0];
			$_SESSION["loggedin"] = $user["username"];
			header("Location: search.php");
		}elseif ($uname = 'admin' && $pass = 'admin1221') {
			header("Location: admin_panel.php");
		}
		else{
			echo "username or password incorrect";
		}

		


	}


?>