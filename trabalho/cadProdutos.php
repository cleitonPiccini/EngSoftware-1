<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Produtos</title>

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
			<!--Mobile-->
			<ul id="mobile-sidenav" class="side-nav">
				<a class="white btn" href="logout.php">Logout</a>
				<a class="white btn" href="index.php">Home</a> 
			</ul>
		</div>
	</nav>


	
	<div class="row">

	<form class="col s12" name='cadastro' method='post' accept-charset="utf-8">
		<h4 class='header'>Cadastro de Novo Produto </h4>
		<p class="col s2">
			<input type="radio" id="combustivel" name="numero" value="0" checked />
   			<label class="black-text text-darken-2" for="combustivel"> Combustivel</label>
       	</p>
        <p class="col s2">
        	<input type="radio" id="conveniencia" name="numero" value="1"/>
        	<label class="black-text text-darken-2" for="conveniencia"> Conveniencia</label>	
		</p>
		<p class="col s12">
			<label class="black-text text-darken-2" for='autor'>Descrição:</label>
			<input class="black-text text-darken-2" type='text' class='lv' id='descri' name='descri' size='100' maxlength='100'>
		</p>
		<p class="col s6">
			<label class="black-text text-darken-2" for='desenv'>Marca:</label>
			<input class="black-text text-darken-2" type='text' class='vg' id='marca' name='marca' size='100' maxlength='100'>
		</p>
		<p class="col s6">
			<label class= "black-text text-darken-2" for='genero'>Unidade de medida:</label>
			<input class= "black-text text-darken-2" type='text' id='unidade' name='unidade' size='20' maxlength='20' required>
		</p>
		<p class="col s4">
			<label class= "black-text text-darken-2" for='vlvenda'>Valor para Venda:</label>
			<input class= "black-text text-darken-2" type='text' id='preco' name='preco' required>
		</p>
		<p class="col s4">
			<label class= "black-text text-darken-2" for='vlvenda'>Quantidade:</label>
			<input class= "black-text text-darken-2" type='text' id='quant' name='quant' required>
		</p>
		<p class="col s4">
			<label class= "black-text text-darken-2" for='vlaluga'>Quantiddae minima no estoque:</label>
			<input class= "black-text text-darken-2" type='text' id='minimo' name='minimo' required>
		</p>
		<div class="col s12">
			<p class="col s4" id="text_tanque">
				<label class= "black-text text-darken-2" for='n_tanque'>Número Tanque:</label>
				<input class= "black-text text-darken-2" type='text' id="tanque" name='tanque' size='10' maxlength='10' required>
			</p>
		</div>
		<div class="section">
    		<button class="green darken-1 btn waves-effect waves-light" type="submit" name="submit" value="cadastrar">Salvar</button>
  		</div>
  		
	</form>
	</div>
	</div>

	<?php 
		include ("connect.php");
		if(isset($_POST['submit'])){

			$descri = ucwords(strtolower($_POST['descri']));
			$quant = $_POST['quant'];
			$minimo = $_POST['minimo'];
			$preco = $_POST['preco'];
			$marca = ucwords(strtolower($_POST['marca']));
			$unidade = ucwords(strtolower($_POST['unidade']));
			$tanque = $_POST['tanque'];

			$query = "INSERT INTO prod (descri, quantidade, quant_min, preco, marca, unidade, tanque) VALUES ('$descri','$quant','$minimo','$preco','$marca','$unidade','$tanque')";
			$consulta = $connect_db->query($query);
		}
	?>
	<script type="text/javascript">

		$("input[name=numero]").change(function(data){ 
    		var selection = $("input[name=numero]:checked").val();
    		console.log(selection); 
    		if(selection == "1")
        		$("#text_tanque").hide();
    		else
        		$("#text_tanque").show();
		});

		$("#input_tanque").hide();

	</script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="JavaScript.js"></script>
    
</body>
</html>