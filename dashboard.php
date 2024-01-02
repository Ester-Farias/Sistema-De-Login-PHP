<?php
    session_start();
    if(empty($_SESSION) || !isset($_SESSION['nome'])) {
        $_SESSION['accessDenied'] = true;
        header("location: index.php?login=accessDenied");
    }
?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
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
                        <h2 class="pb-0 mb-0 pt-0 mt-0 fw-bold">Hey sumido!</h2>
                        <p class="mb-2">Olha quem apareceu?</p>
                      </header>
                      <div class="content-body px-3 py-3">
                      <div class="content-body text-center px-4 py-5 fs-5">
                        <?php
                            if(isset($_SESSION['nome'])) {
                                print "Olá, <strong> " . $_SESSION['nome'] . "</strong><br> Quanto tempo?";
                            } else {
                                print "Olá, usuário desconhecido";
                            }
                        ?>
                         </div>
                        
                      </div>
                      <footer class="text-center mb-3">
                            <a href="logout.php" class="btn btn-danger fw-bold">Logout</a>
                        </footer>
                    </div>
                  </div>
        </div>
        <div class="col col-lg-6  container-image d-none d-lg-block  d-lg-flex justify-content-center align-items-center">
          <img src="img/dashboard-image.svg" class="img-fluid " alt="">
        </div>
      </div>
    </div>
         


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>