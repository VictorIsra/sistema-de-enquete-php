<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>voto realizado</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	
	if(!empty($_GET['titulo']) && !empty($_GET['id'])){

		$titulo_enquete = $_GET['titulo'];
		$enquete_id		= $_GET['id'];
		echo'<h1>Enquete <i>'.$titulo_enquete.'</i> criada com sucesso!</h1>
		<h2><a href="main.php">voltar à página inicial</a></h2>
		<h2><a href="enquete_info.php?id='.$enquete_id.'">Ver informações da enquete</a></h2>';
	}
	else
		header("location: main.php");
	?>
</body>
</html>