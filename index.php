<?php session_start(); ?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="icon" href="img/favicon.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col col-lg-6 bg-danger">
                  <div class="container-login">
                    <div class="content">
                      <header class="text-center card-header">
                        <h2 class="pb-0 mb-0 pt-0 mt-0 fw-bold">Login</h2>
                        <p class="mb-2">Texto inútil aqui!</p>
                      </header>
                      <div class="content-body px-3 py-1">
                        <form action="login.php" method="POST" class="needs-validation">
                          <div class="mb-2">
                            <label for="" class="form-label">Name:</label>
                            <input type="text" name="usuario" class="form-control" id="" placeholder="Juvenaldo" required>
                          </div>
                          <label for="" class="form-label">Password:</label>
                          <input type="password" name="senha" id="" class="form-control" aria-describedby="passwordHelpBlock" required>
                          
                          <?php if(isset($_SESSION['accessDenied']) && $_SESSION['accessDenied']) { ?>
                            <div class="text-danger fw-bold mt-2">
                              Faça login antes de acessar as páginas!
                            </div>   
                            <?php unset($_SESSION['accessDenied']);?>
                          <?php } ?>
                          
                          
                       
                          <div class="col-auto mt-2 mb-0 pb-0 text-center">
                            <button type="submit" class="mb-1 btn-index">Confirmar</button>
                          </div>
                        </form>
                      </div>
                      
                    </div>
                  </div>
        </div>
        <div class="col col-lg-6  container-image d-none d-lg-block  d-lg-flex justify-content-center align-items-center">
          <img src="img/index-image.svg" class="img-fluid " alt="">
        </div>
      </div>
    </div>
  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>