<?php
require_once("../../conection.php"); /*trazendo o arquivo de conexão com banco*/
$tabela = 'banner';//crio uma variavel e atribuo o nome dela com o nome da tebela la do banco de dados

//variavel nome campo imput
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
/*todos campos do input recuperados agora é só lançar no banco*/

//recuperando dados
$query = $pdo->query("SELECT * FROM $tabela WHERE id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

if(@count($res) > 0){
    $foto_campo = $res[0]['imagem'];
}else{
    $foto_campo = "sem-foto.png";
}

//SCRIPT PARA SUBIR FOTO NO SERVIDOR
$nome_img = date('d-m-Y H:i:s') .'-'.@$_FILES['foto_campo']['name'];//dia mes ano hora e segundo para que não suba 2 fotos iguais no banco para não dar poblema
$nome_img = preg_replace('/[ :]+/' , '-' , $nome_img);//fazendo um tratamento retirando traço, caracteres especiais etc

$caminho = '../../img/banners/' .$nome_img;//caminho para a onde a foto vai depois de subir o arquivo

$imagem_temp = @$_FILES['foto_campo']['tmp_name']; 

if(@$_FILES['foto_campo']['name'] != ""){
	$ext = pathinfo($nome_img, PATHINFO_EXTENSION);   
	if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg' or $ext == 'gif'){ 
	
			//EXCLUO A FOTO ANTERIOR
			if($foto_campo != "sem-foto.png"){
				@unlink('../../img/banners/'.$foto_campo);
			}

			$foto_campo = $nome_img;
		
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão de Imagem não permitida!';
		exit();
	}
}

//fazendo a verificação if o id for = a vazio é pq está inserindo registro
//else não for vazio é pq está fazendo a edição
if($id == ""){
      //insere na taela
    $pdo->query("INSERT INTO $tabela SET titulo = '$titulo', subtitulo = '$subtitulo', imagem = '$foto_campo'");

}else{

    $pdo->query("UPDATE $tabela SET titulo = '$titulo', subtitulo = '$subtitulo', imagem = '$foto_campo' WHERE id = '$id'");
}





echo "Dados Salvo com Sucesso";








/*echo $_POST['email']; tras o que está na campo input */
?>