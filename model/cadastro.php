<?php
	session_start();
    //conexao com o BD
	require_once('connection.php');
	ini_set('display_errors', 0 );

	// dados do formulário
	$numCJ=$_POST["numCJ"];
	$numProc=$_POST["numProc"];
	//limpando string num processo
	$numProc = trim($numProc);
	$numProc = str_replace(".", "", $numProc);
	$numProc = str_replace("-", "", $numProc);
	$dataVal=$_POST["dataVal"];
	$natSacador1=$_POST["natSacador1"];
	$nomePF1=$_POST["listaPF"];	
	$nomePJ1=$_POST["listaPJ"];	
	$docSacador1=$_POST["docSacador1"];
	$natSacador2=$_POST["natSacador2"];
	$nomePF2= $_POST["listaPF2"];
	$nomePJ2= $_POST["listaPJ2"];
	$docSacador2= $_POST["docSacador2"];
	$repProc = $_POST["repProc"];
	$nomeAdv= $_POST["listaAdv"];
	$cpfAdv= $_POST["cpfAdv"];
	$oabAdv= $_POST["oabAdv"];
	$dataCadastro = date('Y-m-d', time());

	//verificacao do sacador 1 (pf ou pj)
	if(isset($nomePF1)){
		$nomeSacador1 = $nomePF1;
	}
	else{
		$nomeSacador1 = $nomePJ1;
	}

	//verificacao do sacador 2 (pf ou pj ou nao existe)
	if(isset($nomePF2)){
		$nomeSacador2 = $nomePF2;
		$natSacador2 = 'pf';
	}
	else if(isset($nomePJ2)){
		$nomeSacador2 = $nomePJ2;
		$natSacador2 = 'pj';
	}


	//inserir dados
	$sql = "INSERT INTO processo
			(numContaJud,numProcesso,dataValidade,natSacador1,nomeSacador1,cpfCNPJSacador1,
			natSacador2,nomeSacador2,cpfCNPJSacador2,repProcessual,nomeAdv,cpfAdv, oabAdv,dataCad)
			VALUES
			('$numCJ','$numProc', '$dataVal','$natSacador1','$nomeSacador1', '$docSacador1',
			'$natSacador2','$nomeSacador2','$docSacador2' ,'$repProc','$nomeAdv', '$cpfAdv', '$oabAdv', '$dataCadastro')";

	if ($con->query($sql) === TRUE) {
		echo "<script>alert('Cadastrado com sucesso!');";
		echo "javascript:window.location='../index.php';</script>";
	} else {
	    echo "Error: " . $sql . "<br>" . $con->error;
	}

	$con->close();
?>