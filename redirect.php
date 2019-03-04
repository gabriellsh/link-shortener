<?
include "connection.php";
class Redirect{
	public static function uriRedirect(request){
		$link = $request;

		try{
			$stmt = $conn->prepare('SELECT url FROM url WHERE short = :short');
			$stmt->bindParam(':short',$link[0]);
			$stmt->execute();
			$result = $stmt->fetch();
			echo $result;
		}catch(PDOException $e){
			echo $sql . "<br>" . $e->getMessage();
		}
	}
}