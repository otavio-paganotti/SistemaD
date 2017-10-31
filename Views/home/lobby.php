<<<<<<< HEAD
<!-- Desenvolvido por Marco Cézar Santi Nogueira 27-09-2015 - Propriedade exclusiva. Cópia sujeita as punições Nacionais e Internacionais -->
<!DOCTYPE html PUBLIC "-//opC//DTD XHTML 1.0 Transitional//EN" "http://www.op.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.op.org/1999/xhtml" lang="pt-br">
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" rel="stylesheet" href="../../Css/Css/op.css" media="all">
		<link type="text/css" rel="stylesheet" href="../../Css/Css/style.css" media="all">
		<link type="text/css" rel="stylesheet" href="../../Css/Css/plugins.css" media="all">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
		<title>Lobby</title>

		</head>

		<body style="font-family: Arial">
			<!-- Menu do topo -->
			<div class="op-top">
			  <div class="op-black op-large op-w100">
			    <div class="container">
			    	<div class="container-fluid">
			    		<div class="op-left op-padding-16">LOGOTIPO</div>
						
				    	<div class="dropdown op-right">
							  <button class="dropbtn" style="font-family: Arial;font-size: 11pt;">Opções &nabla;</button>
							  <div class="dropdown-content">
							    <a href="#">Redefinir senha</a>
							    <a href="#">Configurações</a>
							    <a href="#">Sair</a>
							  </div>
						</div>
				    </div>
			    </div>
			  </div>
			  
			</div>
			
			<!-- Sidebar/menu -->
				<div class="op-sb-top">
					<nav class="op-sidebar op-collapse op-white op-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
					  <div class="op-container op-row">
					    <div class="op-col s4">
					      <img src="../../Image/img-art.png" class="op-circle op-margin-right" style="width:46px;height: 46px;">
					    </div>
					    <div class="op-col s8 op-bar">
					      <span>Bem-vindo, <strong>USUÁRIO</strong></span><br>
					      <a href="#" class="op-bar-item op-button"><i class="fa fa-envelope"><img src="../../Image/icons/msg.png" style="width: 17px;height: 15px;" alt="" /></i></a>
					      <a href="#" class="op-bar-item op-button"><i class="fa fa-user"><img src="../../Image/icons/plp.png" style="width: 17px;height: 15px;" alt="" /></i></a>
					      <a href="#" class="op-bar-item op-button"><i class="fa fa-cog"><img src="../../Image/icons/cng.png" style="width: 17px;height: 15px;" alt="" /></i></a>
					    </div>
					  </div>
					  <hr>
					  <div class="op-container">
					    <h5>Painel de Conrole</h5>
					  </div>
					  <div class="op-bar-block">
					    <a href="#" class="op-bar-item op-button op-padding-16 op-hide-large op-dark-grey op-hover-black" onclick="op_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Fechar Menu</a>
					    <a href="#" class="op-bar-item op-button op-padding op-active"><i class="fa fa-users fa-fw"></i>  Visão Geral</a>
					    <a href="#" class="op-bar-item op-button op-padding"><i class="fa fa-eye fa-fw"><img src="../../Image/icons/admin.png" style="width: 17px;height: 15px;" alt="" /></i>  &nbsp;Administrativo</a>
					    <a href="#" class="op-bar-item op-button op-padding"><i class="fa fa-users fa-fw"><img src="../../Image/icons/stock1.png" style="width: 17px;height: 15px;" alt="" /></i>  &nbsp;Estoque</a>
					    <a href="#" class="op-bar-item op-button op-padding"><i class="fa fa-bullseye fa-fw"><img src="../../Image/icons/sale.png" style="width: 17px;height: 15px;" alt="" /></i>  &nbsp;Vendas</a>
					    <a href="#" class="op-bar-item op-button op-padding"><i class="fa fa-diamond fa-fw"><img src="../../Image/icons/bills-to-pay.png" style="width: 17px;height: 15px;" alt="" /></i>  &nbsp;Contas</a>
					    <a href="#" class="op-bar-item op-button op-padding"><i class="fa fa-bell fa-fw"><img src="../../Image/icons/reports2.png" style="width: 17px;height: 15px;" alt="" /></i>  &nbsp;Relatório Cliente</a>
					    <a href="#" class="op-bar-item op-button op-padding"><i class="fa fa-bank fa-fw"><img src="../../Image/icons/reports1.png" style="width: 17px;height: 15px;" alt="" /></i>  &nbsp;Relatório Empresa</a>
					    <a href="#" class="op-bar-item op-button op-padding"><i class="fa fa-history fa-fw"><img src="../../Image/icons/rl.png" style="width: 17px;height: 15px;" alt="" /></i>  &nbsp;Histórico</a>
					    <a href="#" class="op-bar-item op-button op-padding"><i class="fa fa-cog fa-fw"><img src="../../Image/icons/cng.png" style="width: 17px;height: 15px;" alt="" /></i>  &nbsp;Configurações</a><br><br>
					  </div>
					</nav>


					<!-- Efeito de sobreposição ao abrir a barra lateral em telas pequenas -->
					<div class="op-overlay op-hide-medium op-animate-opacity" onclick="op_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
				</div>
				


			
			<script type="text/javascript">
				function myFunction() {
				    var x = document.getElementById("myTopnav");
				    if (x.className === "topnav") {
				        x.className += " responsive";
				    } else {
				        x.className = "topnav";
				    }
				}


				// Obter a barra lateral
				var mySidebar = document.getElementById("mySidebar");

				// Obter o DIV com efeito de sobreposição
				var overlayBg = document.getElementById("myOverlay");

				// Alternar entre mostrar e ocultar a barra lateral e adicionar efeito de sobreposição
				function op_open() {
				    if (mySidebar.style.display === 'block') {
				        mySidebar.style.display = 'none';
				        overlayBg.style.display = "none";
				    } else {
				        mySidebar.style.display = 'block';
				        overlayBg.style.display = "block";
				    }
				}

				// Feche a barra lateral com o botão Fechar
				function op_close() {
				    mySidebar.style.display = "none";
				    overlayBg.style.display = "none";
				}
			</script>	
			<script type="text/javascript" src="../../Js/jquery-3.2.1.min.js"></script>
			<script type="text/javascript" src="../../Js/bootstrap.min.js"></script>
			<?php
			//var_dump($_POST);

			?>
		</body>
=======
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
			<!-- Menu do topo -->
			<div class="op-top">
			  <div class="op-color op-large op-w100">
			    <div class="container">
			    	<div class="container-fluid">
			    		<div class="op-left op-padding-16">LOGOTIPO</div>
						
				    	<div class="dropdown op-right">
							  <button class="dropbtn">Opções &nabla;</button>
							  <div class="dropdown-content">
							    <a href="#">Redefinir senha</a>
							    <a href="#">Configurações</a>
							    <a href="#">Sair</a>
							  </div>
						</div>
				    </div>
			    </div>
			  </div>
			  
			</div>
			
			<!-- Sidebar/menu -->
				<div class="op-sb-top">
					<nav class="op-sidebar op-collapse op-white op-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
					  <div class="op-container op-row">
					    
					    <div class="op-col s8 op-bar">
					      <span>Bem-vindo, <strong>USUÁRIO</strong></span><br>
					      <a href="#" class="op-bar-item op-button"><i class="fa fa-envelope"><img src="../../Image/icons/msg.png" style="width: 17px;height: 15px;" alt="" /></i></a>
					      <a href="#" class="op-bar-item op-button"><i class="fa fa-user"><img src="../../Image/icons/plp.png" style="width: 17px;height: 15px;" alt="" /></i></a>
					      <a href="#" class="op-bar-item op-button"><i class="fa fa-cog"><img src="../../Image/icons/cng.png" style="width: 17px;height: 15px;" alt="" /></i></a>
					    </div>
					  </div>
					  <hr class="color-diferent">
					  <div class="op-container">
					    <h5>Painel de Conrole</h5>
					  </div>
					  <div class="op-bar-block">
					    <a href="#" class="op-bar-item op-button op-padding-16 op-hide-large op-dark-grey op-hover-black" onclick="op_close()" title="close menu">
					    	<i class="fa fa-remove fa-fw"></i>
					    	  Fechar Menu
					    </a>
					    <a href="#" class="op-bar-item op-button op-padding op-active visaoGeral">
					    	<i class="fa fa-users fa-fw">
					    		
					    	</i>
					    	  Visão Geral
					    </a>
					    <a href="#" class="op-bar-item op-button op-padding"  id="visaoAdministrativo" onclick="visaoAdministrativo()">
					    	<i class="fa fa-eye fa-fw visaoAdministrativo">
					    		<img src="../../Image/icons/admin.png" style="width: 17px;height: 15px;" alt="" />
					    	</i>
					    	  &nbsp;Administrativo
					    </a>
					    <a href="#" class="op-bar-item op-button op-padding"  id="visaoEstoque" onclick="visaoEstoque()">
					    	<i class="fa fa-users fa-fw visaoEstoque">
					    		<img src="../../Image/icons/stock1.png" style="width: 17px;height: 15px;" alt="" />
					    	</i>
					    	  &nbsp;Estoque
					    </a>
					    <a href="#" class="op-bar-item op-button op-padding"  id="visaoVendas" onclick="visaoVendas()">
					    	<i class="fa fa-bullseye fa-fw visaoVendas">
					    		<img src="../../Image/icons/sale.png" style="width: 17px;height: 15px;" alt="" />
					    	</i>
					    	  &nbsp;Vendas
					    </a>
					    <a href="#" class="op-bar-item op-button op-padding"  id="visaoContas" onclick="visaoContas()">
							<i class="fa fa-diamond fa-fw">
								<img src="../../Image/icons/bills-to-pay.png" style="width: 17px;height: 15px;" alt="" />
							</i> 
							 &nbsp;Contas
						</a>					    
						<a href="#" class="op-bar-item op-button op-padding"  id="visaoRelatorioCliente" onclick="visaoRelatorioCliente()">
					    	<i class="fa fa-bell fa-fw visaoRelatorioCliente">
					    		<img src="../../Image/icons/reports2.png" style="width: 17px;height: 15px;" alt="" />
					    	</i>
					    	  &nbsp;Relatório Cliente
					    </a>
					    <a href="#" class="op-bar-item op-button op-padding"  id="visaoRelatorioEmpresa" onclick="visaoRelatorioEmpresa()">
					    	<i class="fa fa-bank fa-fw visaoRelatorioEmpresa">
					    		<img src="../../Image/icons/reports1.png" style="width: 17px;height: 15px;" alt="" />
					    	</i>
					    	  &nbsp;Relatório Empresa
					    </a>
					    <a href="#" class="op-bar-item op-button op-padding" id="visaoHistorico" onclick="visaoHistorico()">
					    	<i class="fa fa-history fa-fw visaoHistorico">
					    		<img src="../../Image/icons/rl.png" style="width: 17px;height: 15px;" alt="" />
					    	</i>
					    	  &nbsp;Histórico
					    </a>
					    <a href="#" class="op-bar-item op-button op-padding"  id="visaoConfiguracao" onclick="visaoConfiguracao()">
					    	<i class="fa fa-cog fa-fw visaoConfiguracao">
					    		<img src="../../Image/icons/cng.png" style="width: 17px;height: 15px;" alt="" />
					    	</i>
					    	  &nbsp;Configurações
					    </a>

					    <br>
					    <br>

					  </div>
					</nav>


					<!-- Efeito de sobreposição ao abrir a barra lateral em telas pequenas -->
					<div class="op-overlay op-hide-medium op-animate-opacity" onclick="op_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
				</div>
				
				<div class="container">
					<div class="container-fluid">
						<div class="preenchimento">
							
						</div>
					</div>
				</div>
	
			
			<script type="text/javascript">


				function myFunction() {
				    var x = document.getElementById("myTopnav");
				    if (x.className === "topnav") {
				        x.className += " responsive";
				    } else {
				        x.className = "topnav";
				    }
				}


				// Obter a barra lateral
				var mySidebar = document.getElementById("mySidebar");

				// Obter o DIV com efeito de sobreposição
				var overlayBg = document.getElementById("myOverlay");

				// Alternar entre mostrar e ocultar a barra lateral e adicionar efeito de sobreposição
				function op_open() {
				    if (mySidebar.style.display === 'block') {
				        mySidebar.style.display = 'none';
				        overlayBg.style.display = "none";
				    } else {
				        mySidebar.style.display = 'block';
				        overlayBg.style.display = "block";
				    }
				}

				// Feche a barra lateral com o botão Fechar
				function op_close() {
				    mySidebar.style.display = "none";
				    overlayBg.style.display = "none";
				}
			</script>	
			<script type="text/javascript" src="../../Js/jquery-3.2.1.min.js"></script>
			<script type="text/javascript" src="../../Js/bootstrap.min.js"></script>
			<script type="text/javascript" src="lobby-script.js"></script>
			<?php
			//var_dump($_POST);

			?>
		</body>
>>>>>>> 8c953e9542c60dcabd63699d9dd4ca200a548df6
	</html>