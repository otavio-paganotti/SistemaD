<!-- Desenvolvido por Marco Cézar Santi Nogueira 27-09-2015 - Propriedade exclusiva. Cópia sujeita as punições Nacionais e Internacionais -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" rel="stylesheet" href="../../Css/Css/op.css" media="all">
		<link type="text/css" rel="stylesheet" href="../../Css/Css/style.css" media="all">
		<link type="text/css" rel="stylesheet" href="../../Css/Css/plugins.css" media="all">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet"> 
		<title>Login</title>

		</head>

		<body style="font-family: 'PT Sans Narrow', sans-serif">
			<!-- Menu do topo -->
			<div class="op-top">
			  <div class="op-color op-large op-w100">
			    <div class="op-center op-padding-16">LOGOTIPO</div>
			  </div>
			</div>
			
			<div class="container op-text-topo">
				<h3>Área administrativa da MINHA EMPRESA</h3>
				<p>Acesso somente para pessoas autorizadas.</p>
			</div>

			<div id="teladelogin">
				<!--Formulario de autenticação-->
				
				<form name='formulariologin' id='formulariologin' action="" enctype="application/x-www-form-urlencoded" method="post" >
					<div class="container">
					    <legend class="op-legend-50"><label><b>Usuário</b></label></legend><br />
					    <input type="text" placeholder="Digite usuário" name="uname" required>
						<br />
					    <legend class="op-legend-50"><label><b>Senha</b></label></legend><br />
					    <input type="password" placeholder="Digite senha" name="psw" required>
						<br /><br />
					    <button type="submit" class="op-btn-login" style="font-weight: bold">Entrar</button>
					    <br /><br />
					    <input type="checkbox" checked="checked"> Lembre-me
					  </div>
					  <br />
					  <div class="container">
					  	<div class="op-qd-cz" style="background-color:#f1f1f1">
						    <button type="button" class="cancelbtn">Tire-me daqui</button>
						    <span class="psw">Esqueceu sua <a href="#">senha?</a></span>
						  </div>
					  </div>
				</form>
				
			<script type="text/javascript" src="../../Js/jquery-3.2.1.min.js"></script>
			<script type="text/javascript" src="../../Js/bootstrap.min.js"></script>
			<?php
			//var_dump($_POST);

			?>
		</body>
	</html>