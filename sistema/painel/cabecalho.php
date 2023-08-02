
<?php
require_once("../conection.php"); //verificando antes
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nome_sistema?> Painel - Administrativo</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CND bootstrap style-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--CDN bootstrap scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/dd7fb49998.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../img/icon.png">
    <link rel="stylesheet" href="css/stylepainel.css">
    <!--cdn icon baotstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!--cdn jquery -->
    <script
			  src="https://code.jquery.com/jquery-3.6.1.js"
			  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
			  crossorigin="anonymous"></script>

    <!--Função js -->
    <script type="text/javascript" src="js/mascara.js"></script>
    
<!-- Ajax para funcionar Mascaras JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script> 
    
<!--Função js -->
<script type="text/javascript" src="js/ajax.js"></script>

<link rel="styesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/> 
	<script type="text/javascript" src="DataTables/datatables.min.js"></script>

</head>

<!--Navbar bootstrap-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="../img/logo.png" style="border-radius: 50%;" width="75px" height="70px"></a>
  <p style="color: darkslategray; font-weight:600; font-size: 16px; padding-top: 16px; ">Bem vindo: <?php echo $nome_user_sistema?></p>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php"> <i class="bi bi-house-check-fill"></i> Configurações</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="banner.php"> <i class="bi bi-images"></i> Banner imagem</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#"> <i class="bi bi-person-plus-fill"></i> Clientes</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#"> <i class="bi bi-cash-coin"></i> Financeiro</a>
        </li>

       <!-- 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->

        <li class="nav-item">
          <a class="nav-link" href="../../index.php"> <i class="bi bi-browser-edge"></i> Ir para site</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="logout.php"> <i  class="bi bi-box-arrow-right"> </i> Sair</a>
        </li>


      </ul>
      
    </div>
  </div>
</nav>

<div class="container">