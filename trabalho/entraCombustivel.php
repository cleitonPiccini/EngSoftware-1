<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Entrada de Combustivel</title>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<meta charset='UTF-8'>
	<link rel="stylesheet" type="text/css" href="mainCSS.css ">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>    
	<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
</head>
<body class="fundo">
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
	<div class="col s2"> </div>
	<?php
		include ("connect.php");
		
		if (isset($_POST['busca'])) {
			
			$cod = $_POST['cod'];
			$query = "SELECT * FROM prod WHERE cod = '$cod';";			
			$consulta = $connect_db->query($query);
			$dado = $consulta->fetch_array();
			
			$descri = $dado["descri"];
			$quant = $dado["quantidade"];
			$minimo = $dado["quant_min"];
			$preco = $dado["preco"];
			$marca = $dado["marca"];
			$unidade = $dado["unidade"];
			$tanque = $dado["tanque"];

		} else {
			$cod = " ";
			$descri = " "; 
			$marca = " ";
			$unidade = " ";
			$quant = 0;
			$tanque = " ";
		}
	?>
	

	<form class="col s12" name='cadastro' method='post' accept-charset="utf-8">
		
		<h4 class='header'>Entrada de Combustivel:</h4>
		<div class="col s12">
		<p class="col s6">
			<label class= "black-text text-darken-2" >Código:</label>
			<input class= "black-text text-darken-2" type='text' id='cod' name='cod' size='70' maxlength='70' value="<?php echo $cod ?>" required>
		</p>
    		<button class="green darken-1 btn waves-effect waves-light" type="submit" name="busca" value="cadastrar">Busca Dados</button>
  		</div>
		<p class="col s6">
        	<label class="black-text text-darken-2" > Descrição: </label>
			<input class="black-text text-darken-2" type="text" id='descri' name='descri' size='100' value="<?php echo $descri ?>" maxlength='100'>
		</p>
			<p class="col s6">
			<label class= "black-text text-darken-2" > Marca: </label>
			<input class= "black-text text-darken-2" type='text' id='marca' name='marca' value="<?php echo $marca ?>" required>
		</p>
			<p class="col s4">
			<label class= "black-text text-darken-2" > Tanque: </label>
			<input class= "black-text text-darken-2" type='text' id='tanque' name='tanque' value="<?php echo $tanque ?>" >
		</p>
		<p class="col s4">
			<label class= "black-text text-darken-2" > Quantidade Atual: </label>
			<input class= "black-text text-darken-2" type='text' id='quant' name='quant' value="<?php echo $quant ?>" >
		</p>
		<p class="col s4">
			<label class= "black-text text-darken-2" > Quantidade de Entrada: </label>
			<input class= "black-text text-darken-2" type='text' id='quanti_nova' name='quanti_nova' >
		</p>
		<div class="section">
    		<button class="green darken-1 btn waves-effect waves-light" type="submit" name="submit" value="cadastrar">Salvar</button>
  		</div>
	</form>
</div>
</div>
	<?php 
		include ("connect.php");
		if(isset($_POST['submit'])){

			$cod = $_POST['cod'];
			$quanti_nova = $_POST['quanti_nova'];
			$quant = $_POST['quant'];
			$novo_valor = $quanti_nova + $quant;
			$query = "UPDATE prod SET quantidade = '$novo_valor' WHERE cod = '$cod'; ";
			$consulta = $connect_db->query($query);
		}
	?>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="JavaScript.js"></script>
    
</body>
</html>