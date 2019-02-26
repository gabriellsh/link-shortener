<?
$servername = "172.18.0.1:3306";
$username = "root";
$password = "root";
try {
	$conn = new PDO("mysql:host=$servername;dbname=short", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
	catch(PDOException $e){
	echo "Erro na conexão: " . $e->getMessage();
}