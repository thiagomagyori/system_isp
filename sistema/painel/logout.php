<?php
@session_start();//inicia a seção

@session_destroy(); // distroi a seção ativa

echo '<script>window.location="../index.php"</script>'; //redireciona para o login.php


/*usuario só consegue entrar no painel se ele passar pelo login e startar um seção*/

?>