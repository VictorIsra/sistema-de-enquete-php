<?php

include_once 'conecta_bd.php';

$enquete_id = $_GET['id'];
$total_campos = 3;

$query = $pdo->prepare("SELECT nome_enquete, data_termino FROM enquete WHERE enquete_id='$enquete_id'");
$query->execute();
$query1 = $query->fetchAll();

$query = $pdo->prepare("SELECT valor_opcao, numero_votos FROM opcao WHERE enquete_id='$enquete_id'");
$query->execute();
$query2 = $query->fetchAll();

$query = $pdo->prepare("SELECT SUM(numero_votos) FROM opcao WHERE enquete_id='$enquete_id'");
$query->execute();
$total_votos = $query->fetch();
$total_votos = (float) $total_votos[0];

echo'<h1><i> '.$query1[0]['nome_enquete'].'</i></h1>
	 <table style="width:90%">
  <tr>
	<th><h2>opções</h2></th>
    <th><h2>quantidade de votos</h2></th>
    <th><h2>porcentagem de votos</h2></th>
  </tr>';
  
  for ($i=0; $i<count($query2) ; $i++) { 
	
	if($total_votos != 0){
		$porcentagem_votos =  (float) ($query2[$i]['numero_votos']/$total_votos)*100;
		$porcentagem_votos =  number_format($porcentagem_votos, 2, ',','');
	}

	else
		$porcentagem_votos = 0;

	echo'<tr>
		<td>'.$query2[$i]['valor_opcao'].'</td>
		<td>'.$query2[$i]['numero_votos'].'</td>
		<td>'.$porcentagem_votos.'%</td>
		</tr>
		<br>';
	
}

echo'</table>
	 <h2>data de término da enquete: <i>'.$query1[0]['data_termino'].'</i>
	 <h3><a href="main.php">voltar à página inicial</a></h3>';

?>