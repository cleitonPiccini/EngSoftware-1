<?php  include ("connect.php");?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<link rel="stylesheet" href="mainCSS.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<title>Postos de Combustivel</title>

</head>
<body>

	<nav>
		<div class="green darken-1 nav-wrapper">
			<a href="#" data-activates="mobile-sidenav" class="button-collapse"><i class="mdi-navigation-menu"></i><span class="controller controller-nav-mobile" id="btRB"></span></a>
			<a class="brand-logo right" href="./">Posto Marcon</a>
			<ul id="nav-mobile" class="light hide-on-med-and-down">
				<span class="controller controller-nav" id="btRB"></span>
				<ul id="dropdown2" class="dropdown-content">
					<li><a href="cadClientes.php" class="black-text text">Cadastrar Clientes</a></li>
					<li><a href="verClientes.php" class="black-text text">Buscar Clientes</a></li>
				</ul>
				<span class="controller controller-nav" id="btRB"></span>
				<ul id="dropdown3" class="dropdown-content">
					<li><a href="cadProdutos.php" class="black-text text">Cadastrar Produtos</a></li>
					<li><a href="entraProduto.php" class="black-text text">Entrada Produto</a></li>
					<li><a href="entraCombustivel.php" class="black-text text">
					Entrada Combustivel</a></li>
					<li><a href="verProdutos.php" class="black-text text">
					Busca Produto Conv.</a></li>
					<li><a href="verCombustivel.php" class="black-text text">Busca Combustivel</a></li>
					<li><a href="atualizaEstoque.php" class="black-text text">Atualiza Produto</a></li>
				</ul>
				<ul id="dropdown6" class="dropdown-content">
					<li><a href="aluga.php" class="black-text text">Cadastrar Fornecedor</a></li>
					<li><a href="devolucao.php" class="black-text text">Buscar Fornecedor</a></li>
				</ul>
				<ul id="dropdown7" class="dropdown-content">
					<li><a href="compra.php" class="black-text text">Venda Produtos</a></li>
				</ul>				
				<a class="green darken-1 btn dropdown-button" href="#!" data-activates="dropdown2"> Clientes <i class= "mdi-navigation-expand-more right"></i></a>
				<a class="green darken-1 btn dropdown-button" href="#!" data-activates="dropdown3"> Produtos <i class= "mdi-navigation-expand-more right"></i></a>
				<a class="green darken-1 btn dropdown-button" href="#!" data-activates="dropdown6"> Fornecedores <i class= "mdi-navigation-expand-more right"></i></a>
				<a class="green darken-1 btn dropdown-button" href="#!" data-activates="dropdown7"> Venda <i class= "mdi-navigation-expand-more right"></i></a>
				<a class="green darken-1 btn" href="index.php"> Logout </a>
			</ul>
	</nav>

	<div class="row">
		
 		<div class="col s4 card">
 			<i class="medium material-icons"> ev_station </i>
 			<p>
 				<label class= "black-text text-darken-2" for='nome'>Bomba 1 - Gasolina :</label>
 			</p>
 			<p>
 				<label class= "black-text text-darken-2" for='nome'>00.00 Litros</label>
 			</p>
 			<p>
 				<a class="green darken-1 btn" href="compra.php">Encerar Abastecida</a>
 			</p>
    	</div>
    	<div class="col s4 card">
 			<i class="medium material-icons"> ev_station </i>
 			<p>
 				<label class= "black-text text-darken-2" for='nome'>Bomba 2 - Gasolina:</label>
 			</p>
 			 <p>
 				<label class= "black-text text-darken-2" for='nome'>00.00 Litros</label>
 			</p>
 			<p>
 				<a class="green darken-1 btn" href="compra.php">Encerar Abastecida</a>
 			</p>
    	</div>
    	<div class="col s4 card">
 			<i class="medium material-icons"> ev_station </i>
 			<p>
 				<label class= "black-text text-darken-2" for='nome'>Bomba 3 - Gasolina:</label>
 			</p>
 			<p>
 				<label class= "black-text text-darken-2" for='nome'>00.00 Litros</label>
 			</p> 			
 			<p>
 				<a class="green darken-1 btn" href="compra.php">Encerar Abastecida</a>
 			</p>
    	</div>
    	<div class="col s4 card">
 			<i class="medium material-icons"> ev_station </i>
 			<p>
 				<label class= "black-text text-darken-2" for='nome'>Bomba 4 - Gasolina:</label>
 			</p>
 			<p>
 				<label class= "black-text text-darken-2" for='nome'>00.00 Litros</label>
 			</p> 			
 			<p>
 				<a class="green darken-1 btn" href="compra.php">Encerar Abastecida</a>
 			</p>
    	</div>
    	<div class="col s4 card">
 			<i class="medium material-icons"> ev_station </i>
 			<p>
 				<label class= "black-text text-darken-2" for='nome'>Bomba 5 - Gasolina:</label>
 			</p>
 			<p>
 				<label class= "black-text text-darken-2" for='nome'>00.00 Litros</label>
 			</p> 			
 			<p>
 				<a class="green darken-1 btn" href="compra.php">Encerar Abastecida</a>
 			</p>
    	</div>
    	<div class="col s4 card">
 			<i class="medium material-icons"> ev_station </i>
 			<p>
 				<label class= "black-text text-darken-2" for='nome'>Bomba 6 - Gasolina:</label>
 			</p>
 			<p>
 				<label class= "black-text text-darken-2" for='nome'>00.00 Litros</label>
 			</p> 			
 			<p>
 				<a class="green darken-1 btn" href="compra.php">Encerar Abastecida</a>
 			</p>
    	</div>
		<div class="col s4 card">
 			<i class="medium material-icons"> ev_station </i>
 			<p>
 				<label class= "black-text text-darken-2" for='nome'>Bomba 7 - Gasolina:</label>
 			</p>
 			<p>
 				<label class= "black-text text-darken-2" for='nome'>00.00 Litros</label>
 			</p> 			
 			<p>
 				<a class="green darken-1 btn" href="compra.php">Encerar Abastecida</a>
 			</p>
    	</div>
    	<div class="col s4 card">
 			<i class="medium material-icons"> ev_station </i>
 			<p>
 				<label class= "black-text text-darken-2" for='nome'>Bomba 8 - Diesel:</label>
 			</p>
 			<p>
 				<label class= "black-text text-darken-2" for='nome'>00.00 Litros</label>
 			</p> 			
 			<p>
 				<a class="green darken-1 btn" href="compra.php">Encerar Abastecida</a>
 			</p>
    	</div>
    	<div class="col s4 card">
 			<i class="medium material-icons"> ev_station </i>
 			<p>
 				<label class= "black-text text-darken-2" for='nome'>Bomba 9 - Diesel:</label>
 			</p>
 			<p>
 				<label class= "black-text text-darken-2" for='nome'>00.00 Litros</label>
 			</p> 			
 			<p>
 				<a class="green darken-1 btn" href="compra.php">Encerar Abastecida</a>
 			</p>
    	</div>
    </div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="JavaScript.js"></script>
</body>
<html>