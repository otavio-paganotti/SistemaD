$(function cadastrarCliente(){
	$('#cadastrarCliente').bind('click', function(){
		$.post("cadastrar.php", function(pagina){
			$('.op-btn-action').html(pagina);
		});
	});
});

$(function clienteCadastrado(){
	$('#clienteCadastrado').bind('click', function(){
		$.post("cadastrado.php", function(pagina){
			$('.op-btn-action').html(pagina);
		});
	});
});
