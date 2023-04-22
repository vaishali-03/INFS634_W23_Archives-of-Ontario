<?php
$server = 'localhost';
$username = 'root';
$password = 'root';
$database = 'archives_of_ontario';


try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}

?>