// alteração dinâmica dos elementos da página do lobby



$(function visaoGeral(){
	
});

$(function visaoAdministrativo(){
	$('#visaoAdministrativo').bind('click', function(){
		$.post("../administrativo/diretoria.php", function(pagina){
			$('.preenchimento').html(pagina);
		});
	});
});

$(function visaoEstoque(){
	$('#visaoEstoque').bind('click', function(){
		$.post("../estoque/estoque.php", function(pagina){
			$('.preenchimento').html(pagina);
		});
	});
});

$(function visaoVendas(){
	$('#visaoVendas').bind('click', function(){
		$.post("../vendas/vendas.php", function(pagina){
			$('.preenchimento').html(pagina);
		});
		
	});
});

$(function visaoContas(){

	$('#visaoContas').bind('click', function(){
		$.post("../contas/contas.php", function(pagina){
			$('.preenchimento').html(pagina);
		});
		
	});

});

$(function visaoRelatorioCliente(){
	$('#visaoRelatorioCliente').bind('click', function(){
		$.post("../relatorios/relatorio-cliente.php", function(pagina){
			$('.preenchimento').html(pagina);
		});
	});
});

$(function visaoRelatorioEmpresa(){
	$('#visaoRelatorioEmpresa').bind('click', function(){
		$.post("../relatorios/relatorio-empresa.php", function(pagina){
			$('.preenchimento').html(pagina);
		});
	});
});

$(function visaoHistorico(){
	$('#visaoHistorico').bind('click', function(){
		$.post("../historico.php", function(pagina){
			$('.preenchimento').html(pagina);
		});
	});
});

$(function visaoConfiguracao(){
	$('#visaoConfiguracao').bind('click', function(){
		$.post("../config.php", function(pagina){
			$('.preenchimento').html(pagina);
		});
	});
});



$(function visaoAdministrativo2(){
	$('#visaoAdministrativo2').bind('click', function(){
		$.post("../administrativo/diretoria.php", function(pagina){
			$('.preenchimento').html(pagina);
		});
	});
});

$(function visaoEstoque2(){
	$('#visaoEstoque2').bind('click', function(){
		$.post("../estoque/estoque.php", function(pagina){
			$('.preenchimento').html(pagina);
		});
	});
});

$(function visaoVendas2(){
	$('#visaoVendas2').bind('click', function(){
		$.post("../vendas/vendas.php", function(pagina){
			$('.preenchimento').html(pagina);
		});
		//$('#visaoVendas').addClass("op-active");
	});
});

$(function visaoContas2(){

	$('#visaoContas2').bind('click', function(){
		$.post("../contas/contas.php", function(pagina){
			$('.preenchimento').html(pagina);
		});
		//$('#visaoContas').addClass("op-active");
	});

});

$(function visaoRelatorioCliente2(){
	$('#visaoRelatorioCliente2').bind('click', function(){
		$.post("../relatorios/relatorio-cliente.php", function(pagina){
			$('.preenchimento').html(pagina);
		});
	});
});

$(function visaoRelatorioEmpresa2(){
	$('#visaoRelatorioEmpresa2').bind('click', function(){
		$.post("../relatorios/relatorio-empresa.php", function(pagina){
			$('.preenchimento').html(pagina);
		});
	});
});

$(function visaoHistorico2(){
	$('#visaoHistorico2').bind('click', function(){
		$.post("../historico.php", function(pagina){
			$('.preenchimento').html(pagina);
		});
	});
});

$(function visaoConfiguracao2(){
	$('#visaoConfiguracao2').bind('click', function(){
		$.post("../config.php", function(pagina){
			$('.preenchimento').html(pagina);
		});
	});
});



