<?php 

include_once 'conecta_bd.php';

if(isset($_GET['valor_opcao'])){
	
	$valor_opcao 	= $_GET['valor_opcao'];
	$enquete_id  	= $_GET['enquete_id'];
	
	$query = $pdo->prepare("UPDATE opcao SET numero_votos = numero_votos + 1 WHERE enquete_id ='$enquete_id' AND valor_opcao = '$valor_opcao' ");
	$query->execute();
	header("location: sucesso.php?id=$enquete_id&valor=$valor_opcao");
	
}

else
	header("location: main.php");
?>