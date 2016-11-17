<?php

include_once 'conecta_bd.php';

$query = $pdo->prepare("SELECT enquete_id, nome_enquete FROM enquete ");
$query->execute();
$valor = $query->fetchAll();

?>