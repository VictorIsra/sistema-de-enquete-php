<?php

include_once 'conecta_bd.php';

if(isset($_GET['id'])){
	
	$enquete_id = $_GET['id'];
	$query = $pdo->prepare("SELECT valor_opcao FROM opcao WHERE enquete_id ='$enquete_id' ");
	$query->execute();
	$valores_opcoes = $query->fetchAll();

	$query = $pdo->prepare("SELECT nome_enquete, descricao FROM enquete WHERE enquete_id ='$enquete_id' ");
	$query->execute();
	$query = $query->fetch();
	$titulo_enquete    = $query['nome_enquete'];
	$descricao_enquete = $query['descricao']; /***** VER DEPOIS COM CALMA COMO SEPARAR ISSO EM OUTRO ARQUIVO VER TEST1.PHP E TEST2.PHP*/

	echo '<h1>'.$titulo_enquete.'</h1>

	<form action="checa_data.php" method="POST" accept-charset="utf-8">';
	
	for ($i=0; $i < count($valores_opcoes); $i++) { 
		
		$valor_opcao = $valores_opcoes[$i]['valor_opcao'];
		echo'<input type="radio" name="valor_opcao" value="'.$valor_opcao.'">'.$valor_opcao.'
		<br>';
	}

	echo'<input type="hidden" name="enquete_id" value="'.$enquete_id.'">
		 <input type="submit" value="Votar!">
		 </form>
		
		<h3>breve descrição:<h4>'.$descricao_enquete.'</h4></h3>
		<h3><a href="enquete_info.php?id='.$enquete_id.'">ver informações da enquete</a></h3><h3><a href="main.php">voltar à página inicial</a></h3>';

}

else
	header("location: main.php");

?>