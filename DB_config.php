<?php

		$server="localhost";
		$user="root";
		$password="";
		$db="webtech";



		function execute($query){
			global $server,$user,$password,$db;
			$conn = mysqli_connect($server,$user,$password,$db);
			mysqli_query($conn,$query);
		}


		function get($query){
			global $server,$user,$password,$db;
			$conn = mysqli_connect($server,$user,$password,$db);
			$result = mysqli_query($conn,$query);
			$data = array();
			while ($row=mysqli_fetch_assoc($result)) {
				$data[] = $row;
			}
			return $data;
		}
?>	