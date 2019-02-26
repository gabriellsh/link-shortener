<?php
include 'connection.php';

$url = $_POST['url'];
$short = $_POST['shortUrl'];

if($_POST['action']==="1" && strlen($url)>9 && strlen($short)>3){
	try{
		$stmt = $conn->prepare('INSERT INTO url(url, short) VALUES (:url, :short)');
		$stmt->bindParam(':url',$url);
		$stmt->bindParam(':short',$short);
		$stmt->execute();
	}catch(PDOException $e){
		echo $sql . "<br>" . $e->getMessage();
	}
}