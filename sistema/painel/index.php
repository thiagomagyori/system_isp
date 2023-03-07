<?php

//chamando a variavel de seção que foi criada em autemticar
@session_start();
require_once("../conection.php");

// se a seção for igual a vazia retorna para login
if(@$_SESSION["nome_user"] == "") {

    echo '<script>window.location="../index.php"</script>';
    exit(); //caso javascript for desativado no browser ele para no exit

}

require_once("cabecalho.php");

?>

<a href="logout.php">sair</a>