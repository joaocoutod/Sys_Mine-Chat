//Busca todas as menssagens
$(document).ready(function (){
	setInterval(function() {
		$.ajax({
			url: "app/function.php?msgs",
			type: "POST",
			success: function(msg){$('#msgbody').html(msg);}
		});
	}, 500);
});


//Insere nova menssagens 
$("#msgg").submit(function(e){
	var formData = new FormData($(this)[0]);
	$.ajax({
		url: "app/function.php?insere",
		type: "POST",
		data: formData,
		async: true,
		cache: false,
		contentType: false,
		processData: false,
		success: function(msg){$('#resul1').html(msg);}
	});
	e.preventDefault();
});


//Deletar todas as menssagens
$("#deletarMsgs").click(function(){
	$.ajax({
		url: "app/function.php?delete",
		type: "POST"
	});
	location.reload(true);
});
