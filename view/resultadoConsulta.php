<?php
   require_once('../model/connection.php');
    
    if(isset($_POST['numProc'])){
        $num = $_POST['numProc'];
    }

    $processo = $systemController->procurarProcesso($num);

?>
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
	  	<table class="table pt-6">
			 <thead class="bg-secondary">
			    <tr>
			      <th scope="col" class="text-dark bg-light h5">Resultado da consulta</th>
			    </tr>
			  </thead>
	  	</table>
	  	<div class="container-fluid p-2" id="resultado">
  			<h6>Dados do processo</h6>
  		 	<hr class="hr-custom">

			<div class="form-group">
				<label for="numProc">Número da Conta Judicial: </label>
				<input type="text" value="<?php echo $processo['numCJ'];?>" class="form-control" id="numCJ" name="numCJ" disabled>
			</div>

			<div class="form-group">
				<label for="numProc">Data do cadastro: </label>
				<input type="text" value="<?php echo date('d/m/Y',strtotime($processo['dataCad']));?>" class="form-control" id="dataCad" name="dataCad"  disabled>
			</div>

			<div class="form-group">
				<label for="numProc">Processo: </label>
				<input type="text" value="<?php echo $processo['numProc'];?>" class="form-control" id="numProcR" name="numProcR" disabled>
			</div>

			<div class="form-group">
				<label for="numProc">Sacador 1: </label>
				<input type="text" value="<?php echo $processo['sac1'];?>" class="form-control" id="sac1" name="sac1" disabled>
			</div>


			<div class="form-group">
				<label for="numProc">Documento (CPF/CNPJ): </label>
				<input type="text" value="<?php echo $processo['doc'];?>" class="form-control" id="doc" name="doc" disabled>
			</div>


			<div class="form-group">
				<label for="numProc">Representação Processual: </label>
				<input type="text" value="<?php echo $processo['repProc'];?>" class="form-control" id="repProc" name="repProc" disabled>
			</div>

	  	</div>  	
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="../content/js/functions.js"></script>
</body>
</html>

