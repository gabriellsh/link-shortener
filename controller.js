function shorten(){
	let data = {
		'url':$('#url').val(),
		'shortUrl':$('#short').val(),
		'action':"1"
	};

	$.ajax({
		type: "POST",
		url: 'model.php',
		data: data,
		success: (err)=> {if(err!=""){alert('Erro: '+err);}}
	});
}