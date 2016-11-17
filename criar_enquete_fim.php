<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		
		echo'<form action="valida_enquete.php" method="POST" accept-charset="utf-8">
			Título da sua enquete:<input type="text" name="titulo_enquete"><br>
			Descrição da enquete: <input type="text" name="descricao_enquete"><br>
			Data de encerramento:<input  type="date" name="data"><br>';
			
			if(isset($_GET['qtdade_opcoes'])){
				
				for ($i=0; $i<$_GET['qtdade_opcoes']; $i++) { 
					
					$indice = $i+1;
					echo'opção' .$indice. '<input type="text" name="opcao[]"><br>';
				}

				echo'<input type="hidden" name="numero" value="'.$_GET['qtdade_opcoes'].'">
				<input type="submit" value="criar enquete!">
				</form>';
			}
		
	?>
</body>
</html>
