<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<link rel="stylesheet" type="text/css" href="mainCSS.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
	<script src="./tablesorter/jquery.tablesorter.js"></script>
	<link rel="stylesheet" href="./tablesorter/themes/blue/custom_style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<title>Lista de Produtos</title>
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
		</div>
	</nav>

	<div class="container bg-transparent">
		<form name='cadastro' method='post' accept-charset="utf-8">
			<h2 class="header">Busca Estoque de Combustivel </h2>
			<p>
				<label class= "black-text text-darken-2" for='cpf'>Informe o número do tanque para efeturar a colsulta de combustivel. </label>
			</p>
			<p>
				<label class= "black-text text-darken-2" for='cpf'>Número do tanque</label>
				<input type='text' id='tanque' name='tanque' size='11' maxlength='11' required>
			</p>
			<div class="section">
    			<button class="green darken-1 btn waves-effect waves-light" 	type="submit" name="submit" value="cadastrar">Busca</button>
  			</div>
  		</form>
  	</div>
<?php 
	include ("connect.php");
	if(isset($_POST['submit'])){
		$tanque = $_POST['tanque'];
		$query = "SELECT cod, descri, SUM(quantidade) as Quantidade, marca FROM prod WHERE tanque = '$tanque';";
		$consulta = $connect_db->query($query);
	}
?>
	
  	<div class="container">
    	<table >
        <thead>
        	<tr>
        		<th>Código</th>
            	<th>Descricao</th>
            	<th>Quantidade no Estoque</th>
            	<th>Marca</th>
        	</tr>
        	<?php if(isset($consulta)){ ?>
        	<?php while ($dado = $consulta->fetch_array()) { ?>
        	<tr>
        		<th><?php echo $dado["cod"]; ?></th>
        		<th><?php echo $dado["descri"]; ?></th>
        		<th><?php echo $dado["Quantidade"]; ?></th>
        		<th><?php echo $dado["marca"]; ?></th>
        	</tr>
        	<?php } ?>
        	<?php } ?>
        </thead>
    </div>
	
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="JavaScript.js"></script>
</body>
</html>
