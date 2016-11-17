<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Página principal</title>
	<?php include 'enquetes.php' ?>

</head>
<body>
	<h1>Enquetes:</h1>
	<?php
	
	for ($i=0; $i<count($valor); $i++)
		echo'<h2><a href =mostra_enquete.php?id='.$valor[$i]['enquete_id'].' > '.$valor[$i]['nome_enquete'].'</a></h2>';
	?>
	<h2><a href=criar_enquete_inicio.php>criar uma nova enquete!</a></h2>

</body>
</html>