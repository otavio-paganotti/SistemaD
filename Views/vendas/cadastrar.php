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
					<div class="op-vendas">
						<form action="#">
							<h3>Registrar Venda</h3>
							<hr />
							<legend>Nome do Cliente</legend>
							<input type="text" placeholder="Nome" />
							<br />
							<legend>Sexo</legend>
							<label class="container2">
							  <input type="radio" name="sexo" value="masc"> Masculino
							  
							  <span class="checkmark"></span>
							</label>
							<label class="container2">
								<input type="radio" name="sexo" value="fem"> Feminino

								<span class="checkmark"></span>
							</label>
							<label class="container2">
								<input type="radio" name="sexo" value="out"> Outro

								<span class="checkmark"></span>
							</label>
							<legend>CPF</legend>
							<input type="text" placeholder="Nome" />
							

							<legend>Endereço</legend>
							<p>Logradouro</p>
							<input type="text" placeholder="Rua, Avenida, Alameda, Viela" />
							<p>Complemento</p>
							<input type="text" placeholder="Ao lado da farmácia XYZ" />
							<p>Bairro</p>
							<input type="text" placeholder="Nome do Bairro" />
							<p>Número</p>
							<input type="number" placeholder="Número da Residência" />
							<p>CEP</p>
							<input type="text" placeholder="Ex: 99999-999" />
							<p>Estado</p>
							 <select>
								<option value="AC">AC</option>
								<option value="AL">AL</option>
								<option value="AP">AP</option>
								<option value="AM">AM</option>
								<option value="BA">BA</option>
								<option value="CE">CE</option>
								<option value="DF">DF</option>
								<option value="ES">ES</option>
								<option value="GO">GO</option>
								<option value="MA">MA</option>
								<option value="MT">MT</option>
								<option value="MS">MS</option>
								<option value="MG">MG</option>
								<option value="PA">PA</option>
								<option value="PB">PB</option>
								<option value="PR">PR</option>
								<option value="PE">PE</option>
								<option value="PI">PI</option>
								<option value="RJ">RJ</option>
								<option value="RN">RN</option>
								<option value="RS">RS</option>
								<option value="RO">RO</option>
								<option value="RR">RR</option>
								<option value="SC">SC</option>
								<option value="SP">SP</option>
								<option value="SE">SE</option>
								<option value="TO">TO</option>
							</select> 
							<p>País</p>
							<input type="text" placeholder="Nome do País" />
						</form>

					
				</div>
			</div>
			<script type="text/javascript" src="../../Js/jquery-3.2.1.min.js"></script>
			<script type="text/javascript" src="../../Js/bootstrap.min.js"></script>
			<script type="text/javascript" src="lobby-script.js"></script>
			<?php
			//var_dump($_POST);

			?>
		</body>
	</html>