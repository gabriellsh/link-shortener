<?
include "connection.php";

$link = explode('/',$_SERVER['REQUEST_URI']);

try{
		$stmt = $conn->prepare('SELECT url FROM url WHERE short = :short');
		$stmt->bindParam(':short',$link[0]);
		$stmt->execute();
	}catch(PDOException $e){
		echo $sql . "<br>" . $e->getMessage();
	}