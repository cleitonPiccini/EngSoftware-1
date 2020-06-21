<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<meta charset='UTF-8'>
	<link rel="stylesheet" type="text/css" href="mainCSS.css ">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>    
	<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<title>Cadastro Fornecedor</title>
</head>
<body class='fundo'>
	<nav>
		<div class="green darken-1 nav-wrapper">
			<a href="#" data-activates="mobile-sidenav" class="button-collapse"><i class="mdi-navigation-menu"></i><span class="controller controller-nav-mobile" id="btRB"></span></a>
			<a class="brand-logo right" href="./">Posto Marcon</a>
			<ul id="nav-mobile" class="light hide-on-med-and-down">
				<a class="green darken-1  btn" href="index.php">Logout</a>
				<a class="green darken-1  btn" href="index.php">Home</a>
			</ul>
		</div>
	</nav>

	<div class="row">
		<form class="col s12" name='cadastro' method='post' accept-charset="utf-8">
			<h3 class="header">Cadastrar novo Fornecedor</h3>
			<p class="col s6">
				<label class= "black-text text-darken-2" for='cpf'>CPF ou CNPJ: (apenas números)</label>
				<input type='text' id='cpf' name='cpf' size='30' maxlength='30' required>
			</p>
			<p class="col s6">
				<label class= "black-text text-darken-2" for='cpf'>IE: (apenas números)</label>
				<input type='text' id='ie' name='ie' size='30' maxlength='30' required>
			</p>
				<p class="col s6">
				<label class= "black-text text-darken-2" for='nome'>Razao Social:</label>
				<input type='text' id='razao_so' name='razao_so' size='100' maxlength='100' required>
			</p>
			<p class="col s6">
				<label class= "black-text text-darken-2" for='nome'>Nome Fantasia:</label>
				<input type='text' id='nome_fant' name='nome_fant' size='100' maxlength='100' required>
			</p>
			<p class="col s8">
				<label class= "black-text text-darken-2" for='tel1'>E-mail:</label>
				<input type='text' id='email' name='email' size='100' maxlength='100' required>
			</p>
			<p class="col s4">
				<label class= "black-text text-darken-2" for='tel1'>Telefone:</label>
				<input type='text' id='tel1' name='tel1' size='20' maxlength='20' required>
			</p>
			<p class="col s12">
				<label class= "black-text text-darken-2" for='ender'>Endereço:</label>
				<input type='text' id='ender' name='ender' size='100' maxlength='100' required>
			</p>
			<p class="col s4">
				<label class= "black-text text-darken-2" for='cidade'>Cidade:</label>
				<input type='text' id='cidade' name='cidade' size='30' maxlength='30' required>
			</p>
			<p class="col s4">
				<label class= "black-text text-darken-2" for='uf'>Estado:</label>
				<input type='text' id='uf' name='uf' size='2' maxlength='2' required>
			</p>
			<p class="col s4">
				<label class= "black-text text-darken-2" for='dtnasc'>CEP:</label>
				<input type='text' id='cep' name='cep' size='50' maxlength='50' required>
			</p>
			<div class="section">
    			<button class="green darken-1  btn waves-effect waves-light" type="submit" name="submit" value="cadastrar">Salvar</button>
  			</div>
		</form>

		<?php 
			include ("connect.php");
			if(isset($_POST['submit'])){

				$cpf = $_POST['cpf'];
				$ie = $_POST['ie'];
				$razao_so = ucwords(strtolower($_POST['razao_so']));
				$nome_fant = ucwords(strtolower($_POST['nome_fant']));
				$email = $_POST['email'];
				$ender = ucwords(strtolower($_POST['ender']));
				$cidade = ucwords(strtolower($_POST['cidade']));
				$uf = strtoupper($_POST['uf']);
				$cep = $_POST['cep'];
				$tel1 = $_POST['tel1'];

			$query = "INSERT INTO fornecedor VALUES ('$cpf','$razao_so','$nome_fant','$ender','$cidade','$uf','$cep','$ie','$email','$tel1')";
			$consulta = $connect_db->query($query);
		}
		?>
	</div>

</body>
</html>