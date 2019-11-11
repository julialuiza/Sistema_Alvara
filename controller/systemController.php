<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	class systemController{

		public function __construct($con){
			$this->con = $con;
		}

		
		public function getDadosPF(){
			$sql = "SELECT nome, cpfCNPJ FROM sacadores WHERE natureza='pf'";

			try{
				$query = mysqli_query($this->con, $sql);
			}
			catch(exception $e){
				throw $e;
			}
			
			return $query;

		}

		public function getDadosPJ(){
			$sql = "SELECT nome, cpfCNPJ FROM sacadores WHERE natureza='pj'";

			try{
				$query = mysqli_query($this->con, $sql);
			}
			catch(exception $e){
				throw $e;
			}
			
			return $query;

		}

		public function getAdv(){
			$sql = "SELECT * FROM advogados";

			try{
				$query = mysqli_query($this->con, $sql);
			}
			catch(exception $e){
				throw $e;
			}
			
			return $query;

		}

		public function procurarProcesso($num){

			$sql = "SELECT numContaJud as numCJ, dataCad, numProcesso as numProc,
				nomeSacador1 as sac1, cpfCNPJSacador1 as doc, repProcessual as repProc
				from Processo
				WHERE numProcesso={$num}";

			try{
				$query = mysqli_query($this->con, $sql);
			}
			catch(exception $e){
				throw $e;
			}
			
			$array = mysqli_fetch_assoc($query);
			
			return $array;

		}
	}
?>