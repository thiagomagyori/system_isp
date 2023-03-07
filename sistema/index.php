<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel - Login</title>
    <!-- CND bootstrap style-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--CDN bootstrap scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/dd7fb49998.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
  </head>

<body>


<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

          

            <div class="img_logo">
              <p>ISP - login</p>
            <img src="img/logotipo.png" alt="logo tipo">
            </div>

         <!--método do tipo post ação autenticar.php-->
        <form method="post" action="autenticar.php">
            <div class="form-outline mb-4">
            <label class="form-label" for="typeEmailX-2">Email</label>                                        <!--obriga o preenchimento-->
              <input name="email" type="email" id="typeEmailX-2" class="form-control" placeholder="Entre com seu email" required />
            </div>

            <div class="form-outline mb-4">
            <label class="form-label" for="typePasswordX-2">Senha</label>
              <input name="senha" type="password" id="typePasswordX-2" class="form-control" placeholder="Entre com sua senha" required/>
            </div>

            <!--Botão -->
            <div class="d-grid gap-2">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Entrar</button>
            </div>
        </form>
           
        <!--linha de divisão-->
            <hr class="my-4">

        <div class="rec_senha">
          <a href="">
          <i class="fa-sharp fa-solid fa-lock"></i>
            Recuperar senha
         </a>
        </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>








 






















</body>
</html>