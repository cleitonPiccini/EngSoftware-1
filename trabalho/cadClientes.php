<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Clientes</title>
	<meta charset='UTF-8'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="mainCSS.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class=".fundo">

	<nav>
		<div class="green darken-1 nav-wrapper">
			<a href="#" data-activates="mobile-sidenav" class="button-collapse"><i class="mdi-navigation-menu"></i><span class="controller controller-nav-mobile" id="btRB"></span></a>
			<a class="brand-logo right" href="./">Posto Marcon</a>
			<ul id="nav-mobile" class="light hide-on-med-and-down">
				<a class="green darken-1 btn" href="index.php">Logout</a>
				<a class="green darken-1 btn" href="index.php">Home</a>
			</ul>
		</div>
	</nav>

	<div class="row">
		<h4 class='header'>Cadastro de Novo Cliente </h4>

		<form class="col s12" name='cadastro' method='post' accept-charset="utf-8">
			<p class="col s7">
				<label class= "black-text text-darken-2" for='nome'>Nome:</label>
				<input type='text' id='nome' name='nome' size='100' maxlength='100' required>
			</p>
			<p class="col s5">
				<label class= "black-text text-darken-2" for='cpf'>CPF ou CNPJ: (apenas números)</label>
				<input type='text' id='cpf' name='cpf' size='11' maxlength='11' required pattern='\d{11}'>
			</p>
			<p class="col s8">
				<label class= "black-text text-darken-2" for='tel1'>E-mail:</label>
				<input type='text' id='email' name='email' size='100' maxlength='100' required>
			</p>
			<p class="col s4">
				<label class= "black-text text-darken-2" for='tel1'>Telefone:</label>
				<input type='text' id='tel1' name='tel1' size='15' maxlength='20' required>
			</p>
			<p class="col s12">
				<label class= "black-text text-darken-2" for='ender'>Endereço:</label>
				<input type='text' id='ender' name='ender' size='100' maxlength='100' required>
			</p>
			<p class="col s4">
				<label class= "black-text text-darken-2" for='cidade'>Cidade:</label>
				<input type='text' id='cidade' name='cidade' size='30' maxlength='100' required>
			</p>
			<p class="col s4">
				<label class= "black-text text-darken-2" for='uf'>Estado:</label>
				<input type='text' id='uf' name='uf' size='2' maxlength='2' required>
			</p>
			<p class="col s4">
				<label class= "black-text text-darken-2" for='dtnasc'>CEP:</label>
				<input type='text' id='cep' name='cep' maxlength="100" required>
			</p>
			<div class="section">
    			<button class="green darken-1 btn waves-effect waves-light" type="submit" name="submit" value="cadastrar">Salvar</button>
  			</div>
		</form>
		<?php 
			include ("connect.php");
			if(isset($_POST['submit'])){

				$cpf = $_POST['cpf'];
				$nome = ucwords(strtolower($_POST['nome']));
				$email = $_POST['email'];
				$ender = ucwords(strtolower($_POST['ender']));
				$cidade = ucwords(strtolower($_POST['cidade']));
				$uf = $_POST['uf'];
				$cep = $_POST['cep'];
				$tel1 = $_POST['tel1'];

			$query = "INSERT INTO cliente VALUES ('$cpf','$nome','$ender','$cidade','$uf','$cep',$email','$tel1')";
			$consulta = $connect_db->query($query);
		}
		?>

	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="JavaScript.js"></script>
	
</body>
</html>