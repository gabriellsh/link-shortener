<!DOCTYPE html>
<html> 
<head>
	<title>Sokratit' vash URL</title>
	<meta charset="utf-8">
	<link href="http://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	
	<div class="container d-flex justify-content-center">
		<form action="#" class="w-75">
			<div class="form-group w-100">
				<label for="exampleInputEmail1">URL</label>
				<input type="text" class="form-control" id="url" pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$"  aria-describedby="url" placeholder="Enter url">
				<small id="emailHelp" class="form-text text-muted">Por favor, entre uma URL válida...</small>
			</div>
			<div class="w-100">
				<label class="sr-only" for="inlineFormInputGroup">Sua URL</label>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text">koro.ml/</div>
					</div>
					<input type="text" class="form-control" id="short" placeholder="shorty">
				</div>
				<button class="btn btn-primary" onclick="shorten()">Submit</button>
			</div>
		</form>
	</div>
	<!-- JQuery -->
	<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
	<script type="text/javascript" src="controller.js"></script>
</body>
</html>

<?
include "redirect.php";
include "connection.php";
if($_GET['1']!="" || $_GET['1']!=null){
	$local=Redirect::uriRedirect($_GET['1']);
	header("Location: ". $local);
}
