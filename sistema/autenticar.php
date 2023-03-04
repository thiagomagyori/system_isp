<?php
//linkando a pagina de conexão a paina atenticar
require_once("conection.php");

//recuperando dados digitados no formulario e passando eles para uma variavel
 $email_form = $_POST["email"];
$senha_form = $_POST["senha"];


//checando email e senha com banco

if($email_form == $email_sistema and $senha_form == $senha_sistema){

    echo "LOGADO COM SUCESSO!<br>";

     echo $nome_sistema;


}else {
    echo "EMAIL OU SENHA INCORREOS!";
}














?>