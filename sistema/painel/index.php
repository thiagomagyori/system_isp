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

?>

<!-------------------INPUTS1-------------------------------->
<div class="row">

<div class="col-md-3">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nome Site</label>
    <input nome="nome" type="texte" class="form-control" value="<?php echo $nome_sistema ?>" required>
    </div>
</div> <!--Fim col-md-3 -->

<div class="col-md-3">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email Site</label>
  <input name="email" type="email" class="form-control" placeholder="Seu Email" value="<?php echo $email_sistema ?>" required>
</div>
</div> <!--Fim col-md-3 -->

<div class="col-md-2 col-6">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Senha Site</label>
  <input name="pw" type="password" class="form-control" placeholder="Senha De Acesso" value="<?php echo $senha_sistema ?>" required>
</div>
</div> <!--Fim col-md-3 -->

<!--aqui o uico que vai ter ID para fazer a formatação no javascript -->
<div class="col-md-2 col-6">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Telefone Site</label>
  <input name="phone" id="tell" type="text" class="form-control" placeholder="Senha De Acesso" value="<?php echo $telefone_sistema ?>" required>
</div>
</div> <!--Fim col-md-3 -->

</div> <!--Fim row -->
<!-------------------INPUTS2-------------------------------->

<div class="row">

<div class="col-md-4">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Endereço</label>
    <input nome="nome" type="texte" class="form-control" value="<?php echo $endereco_sistema ?>" required>
    </div>
</div> <!--Fim col-md-3 -->

<div class="col-md-4">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Logo tipo (*png)</label>
  <input name="logo" type="file" class="form-control">
  <div  style="margin: 15px"><img src="../img/telecom.png" width="40%" alt=""></div>
</div>
</div> <!--Fim col-md-3 -->

<div class="col-md-4">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Ícone (*png)</label>
  <input name="logo" type="file" class="form-control">
  <div style="margin: 15px"><img src="../img/icon.png" width="40px" alt=""></div>
</div>
</div> <!--Fim col-md-3 -->

</div> <!--Fim row -->

<!----------------------BOTÃO---------------------------->

<div align ="right">
<button type="button" class="btn btn-success">Salvar</button>
</div>









</div> <!--Fim container -->

<a href="logout.php">sair</a>