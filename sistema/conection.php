<?php


// passando 4 parâmetros 


$usuario = "root";
$senha = ""; 
$banco = "dbisp";
$servidor = "localhost";
// entre aspa pq é texto

/*date_default_timezone_set() configura o fuso horário padrão 
utilizado por todas as funções de data e hora. NÃO É OBRIGATORIO POR PARA CRIAR A 
CONEXÃO MAIS AJUDA QUANDO TRABALHAMOS COM DATA E HORA*/
date_default_timezone_set("America/Sao_paulo");


//1- mais segura pdo
//2- qual tipo de conexão? mysql
//3- qual nome do banco? $banco
//4- qual nome servidor? $servidor
//5- qual é a codificação do banco de dados utf8 "não é obrigatorio mais é uma boa pratica"
//6- qual é o usuario ? $usuario 
//7-qual é a senha ? $senha 


try {
    $pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");
} 
//coleta o erro que der e joga na variavel $e
catch (Exception $e) {
    echo"Erro ao conectar a database!";
    echo"<br>";
    echo $e; //aqui só deixo enquanto estou desenvolvendo, na hora de hospedar removo
}

//inserindo valores na tabela

$nome_sistema = "Thiago";
$email_sistema = "thiagosilva@gmail.com";
$senha_sistema = "123";
$telefone_sistema = "(19)97827655";
$endereco_sistema ="";


//ultilizando a variavel que carrega a conexão com banco e passando um parametro                                                                                                aqui  éo texto que vai ser sempre esse nunca vai mudar                             
$pdo->query("INSERT INTO config SET nome = '$nome_sistema', email = '$email_sistema', senha = '$senha_sistema', telefone = '$telefone_sistema', endereco = '$endereco_sistema', logo = 'logo.png', icone = 'icone.png'");







?>