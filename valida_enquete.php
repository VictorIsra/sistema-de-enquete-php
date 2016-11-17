<?php

include_once 'conecta_bd.php';

if( !empty($_POST['titulo_enquete']) && !empty($_POST['descricao_enquete']) && !empty($_POST['data']) && !empty($_POST['opcao'])){
	
	$titulo_enquete 	= $_POST['titulo_enquete'];
	$descricao_enquete	= $_POST['descricao_enquete'];
	$data_enquete		= $_POST['data']; 
	$qtdade_opcoes 		= $_POST['numero'];
	$opcoes 	   		= $_POST['opcao'];

	$query = $pdo->prepare("INSERT INTO  enquete (nome_enquete, data_termino, descricao) VALUES ('$titulo_enquete','$data_enquete','$descricao_enquete') ");
	$query->execute();

	$query = $pdo->prepare("SELECT max(enquete_id) FROM enquete");
	$query->execute();
	$id = $query->fetch();

	for ($i=0; $i<$qtdade_opcoes ; $i++) { 
		
		$query = $pdo->prepare("INSERT INTO  opcao (enquete_id,valor_opcao,numero_votos) VALUES ('$id[0]','$opcoes[$i]','0') ");
		$query->execute();
	}

	header("location: sucesso_enquete_criacao.php?titulo=$titulo_enquete&id=$id[0]");
}
else
	header("location: main.php");
?>