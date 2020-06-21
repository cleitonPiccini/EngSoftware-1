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
	
	<title>Devolução</title>

</head>

<body class="fundo">
	<nav>
		<div class="green darken-1 nav-wrapper">
			<a href="#" data-activates="mobile-sidenav" class="button-collapse"><i class="mdi-navigation-menu"></i><span class="controller controller-nav-mobile" id="btRB"></span></a>
			<a class="brand-logo right" href="./">Posto Marcon</a>
			<ul id="nav-mobile" class="light hide-on-med-and-down">
				<a class="green darken-1 btn" href="index.php">Logout</a>
				<a class="green darken-1 btn" href="index.php">Home</a>
			</ul>
			</ul>
		</div>
	</nav>


	<div class="container bg-transparent">
		<h2 class="header">Buscar Fornecedor</h2>
		<p>
			<label class= "black-text text-darken-2" for='cpf'>Informe CPF/CNPJ ou nome para efeturar a colsulta de fornecedor. </label>
		</p>
		<p>
			<label class= "black-text text-darken-2" for='cpf'>CPF ou CNPJ: (apenas números)</label>
			<input type='text' id='cpf' name='cpf' size='11' maxlength='11' required pattern='\d{11}'>
		</p>
		<p>
			<label class= "black-text text-darken-2" for='nome'>Nome:</label>
			<input type='text' id='nome' name='nome' size='30' maxlength='30' required>
		</p>
		<div class="section">
			<div class="section">
    			<button class="green darken-1 btn waves-effect waves-light" type="submit" name="submit" value="cadastrar">Busca</button>
  			</div>
  		</div>
</div>
</body>
</html>
