﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" rel="stylesheet" href="../../Public/Css/Css/op.css" media="all">
		<link type="text/css" rel="stylesheet" href="../../Public/Css/Css/style.css" media="all">
		<link type="text/css" rel="stylesheet" href="../../Public/Css/Css/plugins.css" media="all">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
		<title>SistemaD</title>

	</head>

	<body style="font-family: Karma sans-serif">

		<?php
		//Inicializa a Sessão no PHP para utilizar variáveis de dados do usuário como permissões e acessos e status do login
		session_start();
		//Função que carrega as classes PHP automaticamente
		function carregaClasse($classe){
			$arquivo=$classe.".php";
			if(file_exists($arquivo)){
				require_once($arquivo);
				return true;
			}
		}
		//Definição da função que será utilizada para carregar as Classes PHP
		spl_autoload_register("carregaClasse");
		//Cria novo objeto do tipo controle
		new Controle();

		?>
		
		

		<script type="text/javascript" src="../../Public/Js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="../../Public/Js/bootstrap.min.js"></script>
	</body>
</html>