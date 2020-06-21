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
	<title>Compra</title>
</head>
<body class='fundo'>
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
	
	</div>
	<div class="container">
	<h2 class='header'>Venda</h2>
	
	
	<form name='compra' method='post' action='compra.php' accept-charset="utf-8">
		<p>
			<label class= "black-text text-darken-2" for='cpf'>CPF / CNPJ do Cliente:</label>
			<input type='text' id='cpf' name='cpf' size='11' maxlength='11'>
		</p>
		<p>
        	<input type="checkbox" id="scales" name="feature" value="scales" />
        	<label class="black-text text-darken-2" for="scales"> Gasolina : 00.00 Litros</label>
    	</p>
	
	<div class="row">
    	
    	<div class="col s12">
    	
    		<div class="col s6">
        	<p class="col s5">
        		<input type="checkbox" id="dois" name="feature" value="scales" />
        		<label class="black-text text-darken-2" for="dois"> Cartao </label>
    		</p>
    		<p class="col s5">
        		<input type="checkbox" id="tres" name="feature" value="scales" checked/>
        		<label class="black-text text-darken-2" for="tres"> Dinheiro </label>
    		</p>
        	</div>
        
        <div class= "col s6">
        	<p class="col s5">
				<label class= "black-text text-darken-2" for='cpf'>Codigo Produto:</label>
				<input type='text' id='cod' name='cod' size='11' maxlength='11' required >
			</p>
			<p class="col s5">
				<label class= "black-text text-darken-2">Quantidade Comprada:</label>
				<input type='text' id='quant_compra' name='quant_compra' size='11' maxlength='11' value="1" >
			</p>
			<p class="col s1">
			<button class="green darken-1 btn waves-effect waves-light" type="adiciona" name="adiciona" value="confirmar">Adiciona
   				<i class="mdi-content-send right"></i>
  			</button>
			</p>
		
        </div>	
    	
    	<p>
			<button class="green darken-1 btn waves-effect waves-light" type="submit" name="submit" value="confirmar">Finalizar
   				<i class="mdi-content-send right"></i>
  			</button>
		</p>
		</form>
		<?php 
			include ("connect.php");
			if(isset($_POST['adiciona'])){
				$cod = $_POST['cod'];
				$query = "SELECT * FROM prod WHERE cod = '$cod';";
				$consulta = $connect_db->query($query);
			}
		?>
		<div class="col s12">
    	<table >
        <thead>
        	<tr>
        		<th>Código</th>
            	<th>Descricao</th>
            	<th>Preco Unitario</th>
            	<th>Marca</th>
            	<th>Unidade</th>
        	</tr>
        	<?php if(isset($consulta)){ ?>
        	<?php while ($dado = $consulta->fetch_array()) { ?>
        	<tr>
        		<th><?php echo $dado["cod"]; ?></th>
        		<th><?php echo $dado["descri"]; ?></th>
        		<th><?php echo $dado["preco"]; ?></th>
        		<th><?php echo $dado["marca"]; ?></th>
        		<th><?php echo $dado["unidade"]; ?></th>
        	</tr>
        	<?php } ?>
        	<?php } ?>
        <?php 
			include ("connect.php");
			if(isset($_POST['submit'])){
				$cod = $_POST['cod'];
				$quant = $_POST['quant_compra'];
				$query = "UPDATE prod SET quantidade = quantidade - '$quant' WHERE cod = '$cod';";
				$consulta_aux = $connect_db->query($query);
			}
		?>

</body>
</html>