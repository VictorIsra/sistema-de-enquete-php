<?php 

try{

	$pdo = new PDO("mysql:host=localhost;dbname=enquetes;", "root", "root123");

}catch (PDOException $erro){
	
	echo "nao foi possível conectar-se ao banco...";
	die;
}

?>