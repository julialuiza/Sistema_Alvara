<?php
	session_start();
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require_once('../model/connection.php');

	//seleciona sacadores pf
	$sacPF = $systemController->getDadosPF();
	$sacPF2 = $systemController->getDadosPF();

	//seleciona sacadores pj
	$sacPJ = $systemController->getDadosPJ();
	$sacPJ2 = $systemController->getDadosPJ();

	//seleciona advogados
	$advogados = $systemController->getAdv();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Processo</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="shortcut icon" href="../content/image/tjam3.png">
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
			      <th scope="col" class="text-dark bg-light h5">Dados do alvará</th>
			    </tr>
			  </thead>
	  	</table>

	  	<div class="container-fluid p-2">
	  		<form action="../model/cadastro.php" method="POST">
	  			<h6><span class="custom-span">Campos Obrigatórios (*)</span></h6>
	  			<h6>Dados do Processo</h6>
	  		 	<hr class="hr-custom">

				<div class="form-group">
					<label for="numCJ">Número da Conta Judicial: <span class="custom-span">*</span></label>
					<input type="text" class="form-control" id="numCJ" name="numCJ" placeholder="insira aqui o número da Conta Judicial">
				</div>

				<div class="form-group">
					<label for="numProc">Número do Processo: <span class="custom-span">*</span></label>
					<input type="text" class="form-control" id="numProc" name="numProc" placeholder="insira aqui o número do processo.">
				</div>

				<div class="form-group">
					<label for="numProc">Data de validade:</label>
					<input type="date" name="dataVal" id="dataVal">
				</div>
				
				<!-- sacador 1 -->
				<h6>Dados do Sacador</h6>
	  		 	<hr class="hr-custom">
  		 		<div class="form-group">
					<label for="natSacador1">Natureza do Sacador 1: <span class="custom-span">*</span></label>
					<div class="custom-control custom-radio">
					    <input type="radio" class="custom-control-input" id="natSacador1pf" name="natSacador1" value="pf" required>
					    <label class="custom-control-label" for="natSacador1pf">Pessoa Física</label>
				 	</div>
				 	<div class="custom-control custom-radio mb-3">
					    <input type="radio" class="custom-control-input" id="natSacador1pj" name="natSacador1" value="pj" required>
					    <label class="custom-control-label" for="natSacador1pj">Pessoa Jurídica</label>
					 </div>
				</div>
				
				<div class="form-group sacpf">
					<label for="listaPF">Nome Sacador 1 (Pessoa Física): <span class="custom-span">*</span></label>
					<select class="form-control" id="listaPF" name="listaPF">
					  	<option value="">Por favor, selecione um sacador PF</option>
					  	<?php
					  		while($pf = mysqli_fetch_array($sacPF)) { ?>
					    <option value="<?php echo $pf['nome'] ?>"><?php echo $pf['nome'] ?></option>
					    <?php } ?>
					</select>
				</div>

				<div class="form-group sacpj">
					<label for="listaPJ">Nome Sacador 1 (Pessoa Jurídica): <span class="custom-span">*</span></label>
					<select class="form-control" id="listaPJ" name="listaPJ">
					  	<option  value="">Por favor, selecione um sacador PJ</option>
					  	<?php
					  		while($pj = mysqli_fetch_array($sacPJ)) { ?>
					    <option value="<?php echo $pj['nome'] ?>"><?php echo $pj['nome'] ?></option>
					    <?php } ?>
					</select>
				</div>

				<div class="form-group">
					<label for="docSacador2">CPF/CNPJ Sacador 1: <span class="custom-span">*</span></label>
					<input type="text" class="form-control" id="docSacador1" name="docSacador1" placeholder="CPF/CNPJ Sacador 1">
				</div>
				<!-- fim sacador 1 -->

				<!-- sacador 2 -->
				<div class="form-group">
					<label>Natureza do Sacador 2:</label>
					<div class="custom-control custom-radio">
					    <input type="radio" class="custom-control-input" id="natSacador2NE" name="natSacador2" value="" checked>
					    <label class="custom-control-label" for="natSacador2NE">Não existe</label>
				 	</div>

					<div class="custom-control custom-radio">
					    <input type="radio" class="custom-control-input" id="natSacador2PF" name="natSacador2" value="pf2">
					    <label class="custom-control-label" for="natSacador2PF">Pessoa Física</label>
				 	</div>
				 	<div class="custom-control custom-radio mb-3">
					    <input type="radio" class="custom-control-input" id="natSacador2PJ" name="natSacador2" value="pj2">
					    <label class="custom-control-label" for="natSacador2PJ">Pessoa Jurídica</label>
					 </div>
				</div>
				
				<div class="form-group sacpf2">
					<label for="listaPF">Nome Sacador 2 (Pessoa Física):</label>
					<select class="form-control" id="listaPF2" name="listaPF2" disabled="true">
					  	<option>Por favor, selecione um sacador PF</option>
					  	<?php while($pf = mysqli_fetch_array($sacPF2)) { ?>
					    <option value="<?php echo $pf['nome'] ?>"><?php echo $pf['nome'] ?></option>
					    <?php } ?>
					</select>
				</div>

				<div class="form-group sacpj2">
					<label for="listaPJ">Nome Sacador 2 (Pessoa Jurídica):</label>
					<select class="form-control" id="listaPJ2" name="listaPJ2" disabled="true">
					  	<option>Por favor, selecione um sacador PJ</option>
					  	<?php while($pj = mysqli_fetch_array($sacPJ2)) { ?>
					    <option value="<?php echo $pj['nome'] ?>"><?php echo $pj['nome'] ?></option>
					    <?php } ?>
					</select>
				</div>

				<div class="form-group">
					<label for="docSacador2">CPF/CNPJ Sacador 2: </label>
					<input type="text" class="form-control" id="docSacador2" name="docSacador2" disabled="true" placeholder="CPF/CNPJ Sacador 2">
				</div>
				<!-- fim sacador 2 -->

				<div class="form-group">
					<label>Representação Processual: <span class="custom-span">*</span></label>
					<div class="custom-control custom-radio">
					    <input type="radio" class="custom-control-input" id="adv" name="repProc" value="advogado" required>
					    <label class="custom-control-label" for="adv">Advogado</label>
				 	</div>

				 	<div class="custom-control custom-radio">
					    <input type="radio" class="custom-control-input" id="jusPost" name="repProc" value="jusPostulandi" required>
					    <label class="custom-control-label" for="jusPost">Jus Postulandi</label>
					 </div>
				</div>

				<div class="form-group">
					<label for="listaAdv">Nome do Advogado (a):</label>
					<select class="form-control" id="listaAdv" name="listaAdv" disabled="true">
					  	<option value="vazio">Por favor, selecione um advogado (a)</option>
					  	<?php while($adv = mysqli_fetch_array($advogados)) { ?>
					    <option value="<?php echo $adv['nome'] ?>"><?php echo $adv['nome'] ?></option>
					    <?php } ?>
					   
					</select>
				</div>

				<div class="form-group">
					<label for="cpfAdv">CPF do Advogado:</label>
					<input type="text" class="form-control" id="cpfAdv" name="cpfAdv" placeholder="CPF do Advogado" disabled="true">
				</div>

				<div class="form-group">
					<label for="oabAdv">OAB do Advogado:</label>
					<input type="text" class="form-control" id="oabAdv" name="oabAdv" placeholder="OAB do Advogado" disabled="true">
				</div>

				<button type="submit" class="btn btn-md btn-block btn-custom text-white">CADASTRAR</button>
			</form>
	  	</div>  	
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="../content/js/functions.js"></script>
</body>
</html>


