<?php 

$servername = "localhost";
$username = "root";
$database = "bibliotheque";
$password = "";
$message = "";

try {
  $connect = new PDO("mysql:host=$servername; dbname=$database", $username, $password);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) 
{
	$message = $e->getMessage();
}

?>