$(document).ready(function (){
	setInterval(function() {
		$.ajax({
			url: "app/function.php?msgs",
			type: "POST",
			async: true,
			cache: false,
			success: function(msg){
								$('#msgbody').html(msg);
							}
			});
	}, 700);
});

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


