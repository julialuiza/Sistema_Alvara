<?php
	
 	function getDadosAdv($nome){

 		require_once('../model/connection.php');

		$sql = "SELECT cpf, oab FROM advogados WHERE nome='$nome'";

		$query = mysqli_query($con, $sql);

		$array = mysqli_fetch_assoc($query);

		$dados = array(
			'cpf' => $array['cpf'],
			'oab' => $array['oab']
		);
		
		if($dados != NULL){
			return json_encode($dados);
		}
	}

	echo getDadosAdv($_GET['nome']);
	
?>

