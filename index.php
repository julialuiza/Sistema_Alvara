<!DOCTYPE html>
<html>
  <head>
    <title>TJAM - Sistema Alvará</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="content/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="content/css/estiloGeral.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  </head>

  <body class="bg-white">
    <?php require_once('view/navbar.php');?>
    <?php require_once('view/subnavbar.php');?>

    <div class="container h-100">
      <div class="row h-100 justify-content-center align-items-center pt-5">
        <div class="col-xl-6">
          <div class="card shadow">
            <div class="card-body">              
              <div class="row">

                <div class="col-lg-6 col-sm-12 p-3">
                  <div class="card card-custom">
                    <img src="content/image/file.png" class="card-img-top" alt="...">
                    <div class="card-body"> 
                    </div>
                     <a href="#" class="btn btn-primary btn-block btn-custom">CADASTRAR ALVARÁ</a>
                  </div>
                </div>

                <div class="col-lg-6 col-sm-12 p-3">
                  <div class="card card-custom">
                    <img src="content/image/search.png"  class="card-img-top" alt="...">
                    <div class="card-body">  
                    </div>
                    <a href="#" class="btn btn-primary btn-block btn-custom">CONSULTAR ALVARÁ</a>
                  </div>
                </div>
              </div>             
            </div>

            <div class="card-footer text-muted text-center">
              <p><small>Tribunal de Justiça do Estado do Amazonas ©<br>Setor de Desenvolvimento de Sistemas - SDS/DVTIC</small></p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </body>
</html>