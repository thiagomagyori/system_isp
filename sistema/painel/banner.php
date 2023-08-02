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

<!-- Modal para colocar titulo do banner e subtitulo -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><span id="titulo_inserir"></span></h1>
        <button id="btn-fechar" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--caixa janela modal-->
        <form id="form"><!--chama a fução criada lá no ajax-->

          <!--input titulo-->
    <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Título:</label>
            <input name="titulo" id="titulo" type="text" class="form-control" placeholder="Título se houver">
    </div>

    <!--input subtitulo-->
    <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Subtítulo:</label>
            <input name="subtitulo" id="subtitulo" type="text" class="form-control" placeholder="Subtítulo se houver">
    </div>

    <!--input imagem-->
    <div class="row">
    <div class="col-md-12 col-8">
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Banner:</label>
        <input id="foto-banner" name="foto-banner" type="file" class="form-control" onchange="alteraImg('taget','#foto-banner')"> <!--função-->
        </div>                                                                            <!--passando os 2 parametros-->
    </div> <!--Fim col-md-3 -->
    </div>

<!--Div imagem -->
<div class="md-4 col-4">
   <div><img id="taget-logo" src="../img/banners/sem-foto.png" width="135px" style="margin-top: 15px" alt="Logo tipo"></div>
</div>


        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Salvar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">var pagina = "<?=$pagina?>"</script>
<script src="js/ajax.js"></script>
