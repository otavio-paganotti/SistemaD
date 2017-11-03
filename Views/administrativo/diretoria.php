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
		<title>Lobby</title>

		</head>

		<body style="font-family: 'PT Sans Narrow', sans-serif">
			<div class="container">
				<div class="container-fluid">
					
					<div class="op-top-text4">
						<div class="op-img-top4"></div>
						<p>Administrativo da Empresa</p>
					</div>
					<hr id="op-hr-3" />
					<br /><br /><br />
					 <div class="tab2">
					  <button class="tablinks2" onclick="funcAdm(event, 'geral')">Geral</button>
					  <button class="tablinks2" onclick="funcAdm(event, 'adm1')">Funcionários</button>
					  <button class="tablinks2" onclick="funcAdm(event, 'adm2')">Folha de Pagamento</button>
					  <button class="tablinks2" onclick="funcAdm(event, 'adm3')">Administrativo 3</button>
					  <button class="tablinks2" onclick="funcAdm(event, 'adm4')">Administrativo 4</button>
					  <button class="tablinks2" onclick="funcAdm(event, 'adm5')">Administrativo 5</button>
					</div>

					<div id="geral" class="tabcontent2">
					  <h3>Visão Geral</h3>
					  <p>Lorem Ipsum</p>
					</div>

					<div id="adm1" class="tabcontent2">
					  <h3>ADM 2</h3>
					  <p>Lorem IpsumLorem IpsumLorem IpsumLorem Ipsum.</p>
					</div>

					<div id="adm2" class="tabcontent2">
					  <h3>ADM 3</h3>
					  <p>Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum.</p>
					</div> 

					<div id="adm3" class="tabcontent2">
					  <h3>ADM 4</h3>
					  <p>Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum.</p>
					</div> 

					<div id="adm4" class="tabcontent2">
					  <h3>ADM 5</h3>
					  <p>Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum</p>
					</div> 

					<div id="adm5" class="tabcontent2">
					  <h3>ADM 6</h3>
					  <p>Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum</p>
					</div> 
					
				</div>
			</div>
			<script type="text/javascript">
				function funcAdm(evt, opAdm) {
				    var i, tabcontent, tablinks;
				    tabcontent = document.getElementsByClassName("tabcontent2");
				    for (i = 0; i < 6; i++) {
				        tabcontent[i].style.display = "none";
				    }
				    tablinks = document.getElementsByClassName("tablinks2");
				    for (i = 0; i < tablinks.length; i++) {
				        tablinks[i].className = tablinks[i].className.replace(" active", "");
				    }

				    document.getElementById(opAdm).style.display = "block";
				    evt.currentTarget.className += " active";
				} 
			</script>
			<script type="text/javascript" src="../../Js/jquery-3.2.1.min.js"></script>
			<script type="text/javascript" src="../../Js/bootstrap.min.js"></script>
			<script type="text/javascript" src="vendas-script.js"></script>
			<?php
			//var_dump($_POST);

			?>
		</body>
	</html>