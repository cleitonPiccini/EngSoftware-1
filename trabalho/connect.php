<?php  
	
	$host = "localhost";
	$user = "root";
	$password = "";
	$bd = "posto_marcon";

	$connect_db = new mysqli($host,$user,$password,$bd);
	
	if ($connect_db->connect_errno)
		echo "Falha na Conexao : (".$connect_db->connect_errno.")";

?>