<?php
@session_start();//inicia uma seção

//linkando a pagina de conexão a paina atenticar
require_once("conection.php");

//recuperando dados digitados no formulario e passando eles para uma variavel
 $email_form = $_POST["email"];
$senha_form = $_POST["senha"];


//checando email e senha com banco

if($email_form == $email_sistema and $senha_form == $senha_sistema){
    
    $_SESSION ["nome_user"] = $nome_sistema; // variavel de seção recebe o nome lá do banco
    echo '<script>window.location="painel"</script>'; //faz a rota para pasta painel

}else {
    echo '<script>alert(" Falha ao Logar E-mail ou Senha Incorretos!")</script>';
    echo '<script>window.location="index.php"</script>';
}














?>