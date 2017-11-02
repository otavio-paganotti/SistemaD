
<!-- Desenvolvido por Marco Cézar Santi Nogueira 27-09-2015 - Propriedade exclusiva. Cópia sujeita as punições Nacionais e Internacionais -->
<!DOCTYPE html PUBLIC "-//opC//DTD XHTML 1.0 Transitional//EN" "http://www.op.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.op.org/1999/xhtml" lang="pt-br">
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" rel="stylesheet" href="../../Css/Css/op.css" media="all">
		<link type="text/css" rel="stylesheet" href="../../Css/Css/style.css" media="all">
		<link type="text/css" rel="stylesheet" href="../../Css/Css/plugins.css" media="all">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet"> 
		<title>Estoque</title>

		</head>

		<body style="font-family: 'PT Sans Narrow', sans-serif">
			<div class="container">
				<div class="container-fluid">
					<div class="op-top-text2">
						<div class="op-img-top2">
						</div>
						<p>Estoque (Mês)</p>	
					</div>
					<hr id="op-hr-1" />
					<br />
					<div class="op-tb-search">
						<input type="text" id="entrada2" onkeyup="filtraItens()" placeholder="Procure por nomes">
						<button id="op-add-stock" class="btn">Adicionar</button>
						<table id="tabela2">
						  <tr class="header2">
						    <th style="width:25%;">Nome</th>
						    <th style="width:35%;">Descrição</th>
						    <th style="width:25%;">Quantidade (UN)</th>
						    <th style="width:15%">Retirar</th>
						  </tr>
						  <tr>
						    <td>Item 1</td>
						    <td>Descrição 1</td>
						    <td>4</td>
						    <td class="delete"></td>
						  </tr>
						  <tr>
						    <td>Item 2</td>
						    <td>Descrição 2</td>
						    <td>2</td>
						    <td class="delete"></td>
						  </tr>
						  <tr>
						    <td>Item 3</td>
						    <td>Descrição 3</td>
						    <td>1</td>
						    <td class="delete"></td>
						  </tr>
						  <tr class="op-tb-ultimo">
						    <td>Item 4</td>
						    <td>Descrição 4</td>
						    <td>5</td>
						    <td class="delete"></td>
						  </tr>
						</table> 
						<br />
				</div>
			</div>	
			<script type="text/javascript">
			function filtraItens() {
			  // Declaração de variáveis
			  var input, filter, table, tr, td, i;
			  input = document.getElementById("entrada");
			  filter = input.value.toUpperCase();
			  table = document.getElementById("tabela");
			  tr = table.getElementsByTagName("tr");

			  // Loop em todas as linhas da tabela e ocultar aqueles que não correspondem à consulta de pesquisa
			  for (i = 0; i < tr.length; i++) {
			    td = tr[i].getElementsByTagName("td")[0];
			    if (td) {
			      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
			        tr[i].style.display = "";
			      } else {
			        tr[i].style.display = "none";
			      }
			    }
			  }
			}
		</script>
			<script type="text/javascript" src="../../Js/jquery-3.2.1.min.js"></script>
			<script type="text/javascript" src="../../Js/bootstrap.min.js"></script>
			<script type="text/javascript" src="../home/lobby-script.js"></script>
			<?php
			//var_dump($_POST);
			?>
		</body>
</html>