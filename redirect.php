<?
require ("connection.php");
class Redirect{
	public static function uriRedirect($request){
		$link = $request;

		try{
			$stmt = $GLOBALS['conn']->prepare('SELECT url FROM url WHERE short = :short');
			$stmt->bindParam(':short',$link);
			$stmt->execute();
			$result = $stmt->fetch();
			return $result['url'];
		}catch(PDOException $e){
			echo $sql . "<br>" . $e->getMessage();
		}
	}
}
