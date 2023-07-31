<?php
//dashboard
//chamando a variavel de seção que foi criada em autemticar
@session_start();
require_once("../conection.php");

// se a seção for igual a vazia retorna para login
if(@$_SESSION["nome_user"] == "") {

    echo '<script>window.location="../index.php"</script>';
    exit(); //caso javascript for desativado no browser ele para no exit

}

require_once("cabecalho.php");
$pagina = "banner"; //usar nome que está na variavel para fazer o redirecionamento das paginas 
?>

<!--cod HTML-->

<a  class="btn btn-primary" onclick="inserir()" class="btn btn-outline-primary"> <i class="bi bi-arrow-up-right-square"></i> Novo Banner </a>

<div class="bs-example widget-shadow" style="padding:20px" id="listar">
	
</div>


<script type="text/javascript">var pagina = "<?=$pagina?>"</script>
<script src="js/ajax.js"></script>
