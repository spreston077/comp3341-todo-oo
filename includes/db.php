<?php
	$host = 'localhost';
	$dbname = 'XXXXX_todo';
	$user = 'XXXXX_todo';
	$pass = 'XXXXX';


	try {
		$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}
?>