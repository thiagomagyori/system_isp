<?php
//dashboard INDEX DO PAINEL ADM
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


<!--Vai ser disparado einserido no banco com AJAX-->
<form id="form-config">
<!-------------------INPUTS1-------------------------------->
<div class="row">

<div class="col-md-2">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nome: Administrador</label>
    <input name="nome_adm" type="text" class="form-control" value="<?php echo $nome_user_sistema ?>" required>
    </div>
</div> <!--Fim col-md-3 -->

<div class="col-md-3">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nome: Site</label>
    <input name="nome" type="text" class="form-control" value="<?php echo $nome_sistema ?>" required>
    </div>
</div> <!--Fim col-md-3 -->

<div class="col-md-3">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">E-mail: Site</label>
  <input name="email" type="email" class="form-control" placeholder="Seu Email" value="<?php echo $email_sistema ?>" required>
</div>
</div> <!--Fim col-md-3 -->

<div class="col-md-2 col-6">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Senha: Site</label>
  <input name="pw" type="password" class="form-control" placeholder="Senha De Acesso" value="<?php echo $senha_sistema ?>" required>
</div>
</div> <!--Fim col-md-3 -->

<!--aqui o uico que vai ter ID para fazer a formatação no javascript -->
<div class="col-md-2 col-6">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Telefone: Site</label>
  <input name="phone" id="tell" type="text" class="form-control" placeholder="Telefone" value="<?php echo $telefone_sistema ?>" required>
</div>
</div> <!--Fim col-md-3 -->

</div> <!--Fim row -->
<!-------------------INPUTS2-------------------------------->

<div class="row">

<div class="col-md-4">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Endereço: Empresa</label>
    <input name="end" type="text" class="form-control" value="<?php echo $endereco_sistema ?>" required>
    </div>
</div> <!--Fim col-md-3 -->

<!--SOCIAL-->

<div class="col-md-4">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Facebook</label>
    <input name="facebook" type="text" class="form-control"  placeholder="Facebook se houver" value="<?php echo $facebook_sistema ?>">
    </div>
</div> <!--Fim col-md-3 -->

<div class="col-md-4">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Youtube</label>
    <input name="youtube" type="text" class="form-control" placeholder="Youtube se houver" value="<?php echo $youtube_sistema ?>">
    </div>
</div> <!--Fim col-md-3 -->

<div class="col-md-5">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Instagram</label>
    <input name="instagram" type="text" class="form-control" placeholder="Instagram se houver" value="<?php echo $instagram_sistema ?>">
    </div>
</div> <!--Fim col-md-3 -->

<div class="col-md-4">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Twitter</label>
    <input name="twitter" type="text" class="form-control" placeholder="Twitter se houver"  value="<?php echo $twitter_sistema ?>">
    </div>
</div> <!--Fim col-md-3 -->

<div class="col-md-2">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Cor Em Hexadecimal</label>
    <input name="cor" type="text" class="form-control" placeholder="#00c1c1"  value="<?php echo $cor_sistema ?>">
    </div>
</div> <!--Fim col-md-3 -->

<!--SOCIAL-->

<div class="col-md-5 col-8">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"><p style="color: red; font-weight:600;">Logo tipo Apenas Imagem(*png)</p></label>
  <input id="logo" name="logo" type="file" class="form-control" onchange="alteraImg('taget-logo','#logo')"> <!--função-->
</div>                                                                            <!--passando os 2 parametros-->
</div> <!--Fim col-md-3 -->

<!--Div imagem -->
<div class="md-2 col-4">
   <div><img id="taget-logo" src="../img/logo.png" width="35%" style="margin-top: 15px" alt="Logo tipo"></div>
</div>


<div class="col-md-5 col-8">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"><p style="color: red; font-weight:600;">Ícone Apenas Imagem(*png)</p></label>
  <input id="icone" name="icone" type="file" class="form-control" onchange="alteraImg('target-icone', '#icone')"> <!--função-->
</div>                                                         <!--passando os 2 parametros-->
</div> <!--Fim col-md-3 -->

<!--Div imagem -->
<div class="md-2 col-4">
   <div><img  id="target-icone" src="../img/icone.png" width="40px" style="margin-top: 29px" alt="Icone"></div>
</div>

</div> <!--Fim row -->



<!----------------------BOTÃO---------------------------->

<div align="right">
<button type="submit" class="btn btn-success">Salvar</button>
</div>

<small><div id="mensagem" align="center"></div></small>

</form>

</div> <!--Fim container -->

<!--Script que vai mandar todos campos do formulario para o arquivo que vai fazer a inserção ao banco-->
<!--que é o salvarForm.php que vai fazer o processameto-->
<script type="text/javascript">
$("#form-config").submit(function () {
  $('#mensagem').text('Carreando...')


event.preventDefault(); /*não deixa carregar a pg*/
var formData = new FormData(this); /*variavel que vai receber todos inputs do formulario*/

$.ajax({  
    url: "scripts/salvarForm.php", /*caminho onde ele vai redirecionar todos dados do form-config e vai mandar esses dados via metodo post para o arquivo salvarForm.php é lá que vai ter todos nomes dos imputs todos campos*/
    type: 'POST',
    data: formData,

    /*se for salvo retorna mensagem*/
    success: function (mensagem) {
        $('#mensagem').text('');
        $('#mensagem').removeClass()
        if (mensagem.trim() == "Dados Salvo com Sucesso") {
        location.reload();/*para atualizar a pg para carregar os novos dados do input*/
        $('#mensagem').addClass('text-success')
        $('#mensagem').text(mensagem)    
        /*se o insert for feito no banco de dados com sucesso ele exibe a mensagem Dados Salvo com Sucesso */     
        
/*senão cai no else e retorna o erro*/
        } else {

            $('#mensagem').addClass('text-danger')
            $('#mensagem').text(mensagem)
        }


    },
    /*para passar as img junto ao formulario*/
    cache: false,
    contentType: false,
    processData: false,

});

});
</script>