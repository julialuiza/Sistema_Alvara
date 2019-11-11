<?php
	
 	function getDadosPJ($nome){

 		require_once('../model/connection.php');

		$sql = "SELECT cpfCNPJ FROM sacadores WHERE nome='$nome' and natureza='pj'";

		$query = mysqli_query($con, $sql);

		$array = mysqli_fetch_assoc($query);

		$dados = array(
			'cpfCNPJ' => $array['cpfCNPJ'],
		);
		
		if($dados != NULL){
			return json_encode($dados);
		}
	}

	echo getDadosPJ($_GET['nome']);
	
?>

