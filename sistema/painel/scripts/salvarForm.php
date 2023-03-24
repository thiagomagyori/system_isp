<?php
require_once("../../conection.php"); /*trazendo o arquivo de conexão com banco*/


/*variaveis que vão ser guardada os valores do input para poder dar um UPDATE NA TABELA CONFIG*/
$adm_campo = $_POST['nome_adm'];
$nome_campo = $_POST['nome'];
$email_campo = $_POST['email'];
$senha_campo = $_POST['pw'];
$telefone_campo = $_POST['phone'];
$endereco_campo = $_POST['end'];
$facebook_campo = $_POST['facebook'];
$youtube_campo = $_POST['youtube'];
$instagram_campo = $_POST['instagram'];
$twitter_campo = $_POST['twitter'];
$cor_campo = $_POST['cor'];
/*todos campos do input recuperados agora é só lançar no banco*/

//SCRIPT PARA SUBIR FOTO NO SERVIDOR
$nome_img = 'logo.png';
$caminho = '../../img/'.$nome_img;//caminho da pasta imagem

$imagem_temp = @$_FILES['logo']['tmp_name']; 

//checa se está vazio
if(@$_FILES['logo']['name'] != "")
{                 
    $extension = pathinfo($nome_img, PATHINFO_EXTENSION);//pathinfo — Retorna informações sobre um caminho de arquivo

	if($extension == "png") //checa se a extenção da imagem é.png 
	{
		move_uploaded_file($imagem_temp, $caminho);//move para pasta
	}
	else
	{
		echo 'Extensão de imagem não permitida, insira imagens apenas PNG!';
		exit();
	}
}


//SCRIPT PARA SUBIR FOTO NO SERVIDOR
$nome_img = 'icone.png';
$caminho = '../../img/'.$nome_img;//caminho da pasta imagem

$imagem_temp = @$_FILES['icone']['tmp_name']; 

//checa se está vazio
if(@$_FILES['icone']['name'] != "")
{                 
    $extension = pathinfo($nome_img, PATHINFO_EXTENSION);//pathinfo — Retorna informações sobre um caminho de arquivo

	if($extension == "png") //checa se a extenção da imagem é.png 
	{
		move_uploaded_file($imagem_temp, $caminho);//move para pasta
	}
	else
	{
		echo 'Extensão de imagem não permitida, insira imagens apenas PNG!';
		exit();
	}
}



/*atualiza tabela config onde*/
$pdo->query("UPDATE config SET username = '$adm_campo', nome = '$nome_campo', email = '$email_campo', senha = '$senha_campo', telefone = '$telefone_campo', endereco = '$endereco_campo', facebook = '$facebook_campo', youtube = '$youtube_campo', instagram = '$instagram_campo', twitter = '$twitter_campo', corsystem = '$cor_campo'");


echo "Salvo com Sucesso";








/*echo $_POST['email']; tras o que está na campo input */
?>