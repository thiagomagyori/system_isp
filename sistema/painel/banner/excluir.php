<?php 
require_once("../../conection.php");
$tabela = 'banner';
$id = $_POST['id'];


$pdo->query("DELETE FROM $tabela WHERE id = '$id'");


echo "Excluído com Sucesso";

 ?>