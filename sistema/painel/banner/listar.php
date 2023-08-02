<?php 
require_once("../../conection.php");
$tabela = 'banner';

$query = $pdo->query("SELECT * FROM $tabela order by id desc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){

//indexando HTML no echo do PHP
echo <<<HTML
	<small>
	<table class="table table-hover" id="tabela">
	<thead> 
	<tr> 
	<th>Títilo</th>	
	<th class="esc">Subtítulo</th> 	
	<th class="esc">Imagem</th> 		
	<th>Ações</th>
	</tr> 
	</thead> 
	<tbody>	
HTML;

//percorrendo cada linha da tabela banner e recuperando os valores delas
for($i=0; $i < $total_reg; $i++){
		$id = $res[$i]['id'];
		$titulo = $res[$i]['titulo'];		
		$subtitulo = $res[$i]['subtitulo'];		
		$imagem = $res[$i]['imagem'];	

		$subtituloF = mb_strimwidth($subtitulo, 0, 80, "...");	//não exibe o texto todo do subtitulo mostra até 80 caracteres

		
//exibindo os dados no front
echo <<<HTML
<tr>
<td>{$titulo}</td>
<td class="esc">{$subtituloF}</td>
<td class="esc"><img src="../img/banners/{$imagem}" width="30px"></td>
<td>
	<big><a href="#" onclick="editar('{$id}','{$titulo}', '{$subtitulo}', '{$imagem}')" title="Editar Dados"> <i class="bi bi-pencil-square"></i> </a></big>

	
	<li class="dropdown head-dpdn2" style="display: inline-block;">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><big> <i class="bi bi-trash"></i> </big></a>

		<ul class="dropdown-menu" style="margin-left:-230px;">
		<li>
		<div class="notification_desc2">
		<p>Confirmar Exclusão? <a href="#" onclick="excluir('{$id}')"><span class="text-danger">Sim</span></a></p>
		</div>
		</li>										
		</ul>
		</li>
</td>
</tr>
HTML;

}

echo <<<HTML
	</tbody>
	<small><div align="center" id="mensagem-excluir"></div></small>
	</table>
	</small>
HTML;


}else{
	echo 'Não possui registros cadastrados!';
}


 ?>


<script type="text/javascript">
	$(document).ready( function () {
    $('#tabela').DataTable({
    		"ordering": false,
			"stateSave": true
    	});
    $('#tabela_filter label input').focus();
} );
</script>


<script type="text/javascript">
	function editar(id, titulo, subtitulo, foto_campo){
		$('#id').val(id);
		$('#titulo').val(titulo);
		$('#subtitulo').val(subtitulo);
		$('#titulo_inserir').text('Editar Registro');
		$('#modalForm').modal('show');
		$('#foto_campo').val('');
		$('#target').attr('src','../img/banners/' + foto_campo);
	}




	function limparCampos(){
		$('#id').val('');
		$('#titulo').val('');
		$('#subtitulo').val('');		
		$('#foto_campoF').val('');
		$('#target').attr('src','../img/banners/sem-foto.png');
	}

</script>