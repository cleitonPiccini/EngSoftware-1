<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>

	<title>Lista de Produtos</title>
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
				<a class="green darken-1 btn" href="index.php">Logout</a>
				<a class="green darken-1 btn" href="index.php">Home</a>
			</ul>
		</div>
	</nav>

	<div class="container bg-transparent">
		<form class="col s12" name='cadastro' method='post' accept-charset="utf-8">
			<h2 class="header">Buscar Produto no Estoque da Conveniencia </h2>
			<p>
				<label class= "black-text text-darken-2">Informe Código para efeturar a colsulta de produto. </label>
			</p>
			<p>
				<label class= "black-text text-darken-2" for='cod'>Código do Produto:</label>
				<input type='text' id='cod' name='cod' size='11' maxlength='11' required>
			</p>
			<div class="section">
    			<button class="green darken-1 btn waves-effect waves-light" type="submit" name="submit" value="cadastrar">Busca</button>
  			</div>
  		</form>
  	</div>
		<?php 
			include ("connect.php");
			if(isset($_POST['submit'])){
				$cod = $_POST['cod'];
				$query = "SELECT * FROM prod WHERE cod = '$cod';";
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
            	<th>Preco Unitario</th>
            	<th>Marca</th>
            	<th>Unidade</th>
        	</tr>
        	<?php if(isset($consulta)){ ?>
        	<?php while ($dado = $consulta->fetch_array()) { ?>
        	<tr>
        		<th><?php echo $dado["cod"]; ?></th>
        		<th><?php echo $dado["descri"]; ?></th>
        		<th><?php echo $dado["quantidade"]; ?></th>
        		<th><?php echo $dado["preco"]; ?></th>
        		<th><?php echo $dado["marca"]; ?></th>
        		<th><?php echo $dado["unidade"]; ?></th>
        	</tr>
        	<?php } ?>
        	<?php } ?>
        </thead>
    </div>
    	
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="JavaScript.js"></script>
</body>
</html>
