<?php
	$dsn = 'mysql:host=localhost; dbname=register';
	$user = 'root';
	$password = ''; 

//Try block to connect the PDO to our database

	try{
		$pdo = new PDO($dsn, $user, $password);
	}catch(PDOException $e){
		echo 'connection error! ' . $e;
	}
 ?>