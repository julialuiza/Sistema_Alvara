<!DOCTYPE html>
<html>
  <head>
    <title>TJAM - Sistema Alvará</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="content/image/tjam3.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="content/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="content/css/estiloGeral.css">
  </head>

  <body class="bg-white">
    <nav class="navbar navbar-light navbar-custom">
      <div class="d-flex flex-row">
        <div class="p-2">
          <a href="../"><img src="content/image/tjam3.png" width="40px" height="50px"></a>
        </div>
        <div class="p-2">
          <h4 class="text-white lead titulo">TRIBUNAL DE JUSTIÇA DO ESTADO DO AMAZONAS</h4>
        </div>
      </div>
    </nav>
    
    <?php require_once('view/subnavbar.php');?>

    <div class="container h-100">
      <div class="row h-100 justify-content-center align-items-center pt-5">
        <div class="col-xl-6">
          <div class="card shadow">
            <div class="card-body">              
              <div class="row">
                <div class="col-lg-6 col-sm-12 p-3">
                  <div class="card card-custom">
                    <img src="content/image/file.png" class="card-img-top mx-auto mt-4" alt="icone de cadastrar processo" style="width: 150px;">
                    <div class="card-body"> 
                    </div>
                     <a href="view/cadastrar.php" class="btn btn-primary btn-block btn-custom">CADASTRAR PROCESSO</a>
                  </div>
                </div>

                <div class="col-lg-6 col-sm-12 p-3">
                  <div class="card card-custom">
                    <img src="content/image/search.png" class="card-img-top mx-auto mt-4" alt="icone de consultar processo" style="width: 150px;">
                    <div class="card-body">  
                    </div>
                    <a href="view/consultar.php" class="btn btn-primary btn-block btn-custom">CONSULTAR PROCESSO</a>
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