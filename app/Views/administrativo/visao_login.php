<!-- Desenvolvido por Marco Cézar Santi Nogueira 27-09-2015 - Propriedade exclusiva. Cópia sujeita as punições Nacionais e Internacionais -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<link type="text/css" rel="stylesheet" href="../../Public/Css/Css/style.css" media="all">
			<link type="text/css" rel="stylesheet" href="../../Public/Css/Css/plugins.css" media="all">
			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
			<title>Index</title>
		</head>

		<body>
			<div id="teladelogin">
				<!--Formulario de autenticação-->
				<img src='imagens/logo.png' alt='Logotipo' id='logo'/>
				<form name='formulariologin' id='formulariologin' action="" enctype="application/x-www-form-urlencoded" method="post" >
					<fieldset title='Dados de Acesso' name='blocoform01' id='blocoform01'><legend>Acesso ao Sistema</legend>
					<input type="hidden" name="acao" id="acao" value="comandosqlLogin" />
					<label for='usuario'>Usuário:</label>
					<input name='usuario' id='usuario' type='text' title='Coloque seu usuário para acesso ao sistema' required>
					<label for='senha'>Senha:</label>
					<input name='senha' id='senha' type='password' title='Coloque sua senha para acesso ao sistema' required>
					<button type='submit' id='botaologin' title='Aperte este botão para acessar o sistema.'>Login</button>
					</fieldset>
				</form>
				<br />
				<!--Recupera a Senha-->
				<a>Recuperar a Senha</a>
				<br />
				<!--Cadastro do usuario-->
				<br />
				<form enctype='application/x-www-form-urlencoded' method='post' action='' >
					<button class='cadastrousuario' id='acao' name='acao' value='cadastrarusuario' type='submit'>Cadastrar Usuárioaaa</button>
				</form>
			</div>

			<?php
			//var_dump($_POST);

			?>
		</body>
	</html>