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

<div class="col-md-3">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Senha Site</label>
  <input name="pw" type="password" class="form-control" placeholder="Senha De Acesso" value="<?php echo $senha_sistema ?>" required>
</div>
</div> <!--Fim col-md-3 -->

<!--aqui o uico que vai ter ID para fazer a formatação no javascript -->
<div class="col-md-3">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Telefone Site</label>
  <input name="phone" id="tell" type="text" class="form-control" placeholder="Senha De Acesso" value="<?php echo $telefone_sistema ?>" required>
</div>
</div> <!--Fim col-md-3 -->

</div> <!--Fim row -->
</div> <!--Fim container -->

<a href="logout.php">sair</a>