<?php

include_once 'conecta_bd.php';

if(isset($_POST['valor_opcao'])){
	
	$valor_opcao 	= $_POST['valor_opcao'];
	$enquete_id  	= $_POST['enquete_id'];
	$data_atual		= date('Y-m-d');

	$query = $pdo->prepare("SELECT data_termino FROM enquete WHERE enquete_id ='$enquete_id' ");
	$query->execute();
	$query = $query->fetch();
	$data_termino = $query['data_termino'];

	if($data_atual < $data_termino)
		header("location: contabiliza.php?enquete_id=$enquete_id&valor_opcao=$valor_opcao");
	
	else{

	echo 'Infelizmente esta enquete já foi fechada desde   '.$data_termino.'
	<h3><a href="enquete_info.php?id='.$enquete_id.'">ver informações da enquete</a></h3><h3><a href="main.php">voltar à página inicial</a></h3>';

	}
}

else
	header("location: main.php");


?>