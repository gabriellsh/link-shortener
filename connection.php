<?
$servername = "mysql.koro.ml";
$username = "koro";
$password = "321626lo";
global $conn;
try {
	$conn = new PDO("mysql:host=$servername;dbname=koro", $username, $password);

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	throw new PDOException($e);
}
