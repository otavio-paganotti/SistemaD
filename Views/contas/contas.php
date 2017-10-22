<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link type="text/css" rel="stylesheet" href="../../Css/Css/op.css" media="all">
		<link type="text/css" rel="stylesheet" href="../../Css/Css/style.css" media="all">
		<link type="text/css" rel="stylesheet" href="../../Css/Css/plugins.css" media="all">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet"> 
		<title>Contas</title>

	</head>

	<body style="font-family: 'PT Sans Narrow', sans-serif">
		<div class="container">
			<div class="container-fluid">
				<div class="op-top-text">
					<div class="op-img-top">
					</div>
					<p>Contas a pagar</p>	
				</div>
				<hr id="op-hr-1" />
				<br />
				<div class="op-tb-search">
					<h3>A pagar:</h3>
					<hr style="width: 40%" />
					<input type="text" id="entrada" onkeyup="filtraItens()" placeholder="Procure por nomes">

					<table id="tabela">
					  <tr class="header">
					    <th style="width:30%;">Nome</th>
					    <th style="width:40%;">Descrição</th>
					    <th style="width:30%;">Valor (R$)</th>
					  </tr>
					  <tr>
					    <td>Item 1</td>
					    <td>Descrição 1</td>
					    <td>00.00</td>
					  </tr>
					  <tr>
					    <td>Item 2</td>
					    <td>Descrição 2</td>
					    <td>00.00</td>
					  </tr>
					  <tr>
					    <td>Item 3</td>
					    <td>Descrição 3</td>
					    <td>00.00</td>
					  </tr>
					  <tr>
					    <td>Item 4</td>
					    <td>Descrição 4</td>
					    <td>00.00</td>
					  </tr>
					</table> 
					<br />
					<div class="op-tb-cadastro">
						<h4>Cadastrar conta:</h4>
						<form class="op-form-cadastro-contas" action="">
							<legend>Nome da Conta</legend>
							<input type="text" placeholder="Digite o nome" /><br />
							<legend>Descrição</legend>
							<input type="text" placeholder="Digite a descrição" /><br />
							<legend>Valor R$</legend>
							<input type="text" placeholder="Digite o valor(R$)" /><br />
							<input type="submit" value="Cadastrar" />

						</form>
					</div>
				</div>
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
	</body>
</html>