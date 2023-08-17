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
      <form id="form"><!--chama a fução criada lá no ajax-->
      <div class="modal-body">
        <!--caixa janela modal-->
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
        <input id="foto" name="foto" type="file" class="form-control" onchange="alterarImg('taget','#foto')"> <!--função-->
        </div>                                                                            <!--passando os 2 parametros-->
    </div> <!--Fim col-md-3 -->

                               <!--Div imagem -->
                               <div class="md-4 col-4">
                                          <div><img id="taget" src="../img/banners/sem-foto.jpg" width="135px" style="margin-top: 15px" alt="Logo tipo"></div>
                                </div>
    </div>

    <!--campo oculto que vai receber o ID na hora da edição -->
    <input type="hidden" name="id" id="id">
    <!--campo na onde vai aparecer a mensagem -->
    <small><div id="mensagem" align="center"></div></small>




       
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Salvar</button>
      </div>
      </form><!--fim formulario-->
    </div>
  </div>
</div>


<!-- Modal para excluir -->
<div class="modal fade" id="modalExcluir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title fs-5" id="exampleModalLabel">Excluir Registro</h5>
                                  <button id="btn-fechar-excluir" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                      <form id="form-excluir"><!--dispara o formulario para fução criada lá no ajax-->
                                        <div class="modal-body">
                                          <p>Deseja realmete excluir o registro: <span id="titulo-excluir"></span></p>

                                     <input type="hidden" name="id" id="id-excluir">
                                     <small><div id="mensagem-excluir" align="center"></div></small>

                                  </div>
                                <div class="modal-footer">
                             <button type="submit" class="btn btn-danger">Excluir</button>
                           </div>
                         </form><!--fim formulario-->
                       </div>
                   </div>
                </div>

<script type="text/javascript">var pagina = "<?=$pagina?>"</script>
<script src="js/ajax.js"></script>
