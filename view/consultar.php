<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Cliente</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" href="../content/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../content/css/estiloGeral.css">

</head>

<body class="bg-white">
	
	<nav class="navbar navbar-light navbar-custom">
		<div class="d-flex flex-row">
			<div class="p-2">
				<a href="../"><img src="../content/image/tjam3.png" width="40px" height="50px"></a>
			</div>
			<div class="p-2">
				<h4 class="text-white lead titulo">TRIBUNAL DE JUSTIÇA DO ESTADO DO AMAZONAS</h4>
			</div>
		</div>
	</nav>
    <?php require_once('subnavbar.php');?>

	<div class="container bg-white card p-2" id="cadForm">

	  	<table class="table">
			 <thead class="bg-secondary">
			    <tr>
			      <th scope="col" class="text-dark bg-light h5">Consultar Processo</th>
			    </tr>
			  </thead>
	  	</table>

	  	<div class="container-fluid p-2">
	  		<form action="resultadoConsulta.php" method="POST">
	  			<h6>Consultar Dados do Processo</h6>
	  		 	<hr class="hr-custom">

				<div class="form-group">
					<label for="numProc">Número do Processo: <span class="custom-span">*</span></label>
					<input type="text" class="form-control" id="numProc" name="numProc" placeholder="insira aqui o número do processo." required>
				</div>
			
				<button type="submit" class="btn btn-md btn-block btn-custom text-white">CONSULTAR PROCESSO</button>
			</form>
	  	</div>
</body>
</html>

