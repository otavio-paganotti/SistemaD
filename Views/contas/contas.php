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
		<style type="text/css">
			@media screen and (max-width: 940px){::-webkit-input-placeholder  { position: relative; left: 30px; }input:-moz-placeholder { position: relative; left: 30px; }textarea:-moz-placeholder { position: relative; left: 30px; }​}
		</style>
	</head>
	<body style="font-family: 'PT Sans Narrow', sans-serif">
		<div class="container">
			<div class="container-fluid">
				<div class="op-float-left">
					<div class="op-top-text">
						<div class="op-img-top">
						</div>
						<p>Contas a pagar (Mês)</p>	
					</div>
					<hr id="op-hr-1" />
					<br />
					<div class="op-tb-search">
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
						  <tr class="op-tb-ultimo">
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
							<br /><br />
						</div>
					</div>
				</div>
				
				<br /><br /><br />

				<aside class="op-aside">
					<div class="op-element-list">
						<div class="op-img-top">
						</div>
						<p>Contas pagas (Mês)</p>	
					</div>
					<hr id="op-hr-2" />
					<div class="op-lists">
						<input type="text" id="minhaEntrada" onkeyup="buscarTabela()" placeholder="Procure por nome">

						<ul id="minhaUl">
						  <li><a href="#">Item 1</a></li>
						  <li><a href="#">Item 2</a></li>

						  <li><a href="#">Item 3</a></li>
						  <li><a href="#">Item 4</a></li>

						  <li><a href="#">Item 5</a></li>
						  <li><a href="#">Item 6</a></li>
						  <li><a href="#">Item 7</a></li>
						</ul>
					</div>
					<br /><br /><br />
				</aside>
			</div>
		</div>


		
		<script type="text/javascript">
			function buscarTabela() {
			    // Declaração de variáveis
			    var input, filter, ul, li, a, i;
			    input = document.getElementById('minhaEntrada');
			    filter = input.value.toUpperCase();
			    ul = document.getElementById("minhaUl");
			    li = ul.getElementsByTagName('li');

			    // Loop em todas as linhas da lista e ocultar aqueles que não correspondem à consulta de pesquisa
			    for (i = 0; i < li.length; i++) {
			        a = li[i].getElementsByTagName("a")[0];
			        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
			            li[i].style.display = "";
			        } else {
			            li[i].style.display = "none";
			        }
			    }
			}
		</script>

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