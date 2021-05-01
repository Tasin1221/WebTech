<?php
	
	include 'model/DB_config.php';

	$email = "";
	$err_email = "";

	$pass = "";
	$err_pass = "";

	$uname = "";
	$err_uname = "";

	$phone = "";
	$err_phone = "";



	function ValidateEmail($email){
		$pos_at = strpos($email,"@");
		$pos_dot = strpos($email,".",$pos_at++);
		if ($pos_dot > $pos_at) {
			return true;
		}
		return false;

	}

	function ValidatePass($pass){
		$UpperCase = false; 
		$Lowercase = false ;
		for ($i=0; $i <strlen($pass) ; $i++) { 
			if(ctype_upper($pass[$i])){
				$UpperCase = true;
			}
			if (ctype_lower($pass[$i])) {
				$Lowercase = true;
			}
		}
		if ($UpperCase == false || $Lowercase == false) {
				return false;
			}else{
				return true;
			}

	}
	if($_SERVER["REQUEST_METHOD"] == "POST"){


		$pass = $_POST["pass"];
		$email = $_POST["email"];
		$uname = $_POST["uname"];
		$phone = $_POST["phone"];

		

		$query = "insert into registration values ('$uname','$pass','$email','$phone')";

		execute($query);
			

		if (empty($email)) {
			$err_email = "Email required";
		}else if(!ValidateEmail($_POST["email"])){
			$err_email = "Email isn't right format";
		}else{
			$email = htmlspecialchars($_POST["email"]);
		}




		if (empty($pass)) {
			$err_pass = "Password Required";
		}else if(!ValidatePass($pass)){
			$err_pass = "Password must contain upper and lower characters";
		}else{
			$pass = htmlspecialchars($_POST["pass"]);
		}


		


		if (empty($_POST["uname"])) {
			$err_uname = "Username required";
		}else if(strlen($_POST["uname"]) <= 6){
			$err_uname = "Username must contain at least 6 characters";
		}else{
			$uname = $_POST["uname"] ;
		}


        

		if (empty($_POST["phone"])) {
			$err_phone = "Insert your number";
		}else if(!is_numeric($_POST["phone"])){
			$err_phone = "Phone Number must be contained Numeric value" ;
		}else{
			$phone = $_POST["phone"];
		}
	}
?>