<?php
	class dbController{

		public function connect_db(){
			$con = mysqli_connect("localhost", "root", "","sistemaalvara") or die("Error:".mysql_errno());
			mysqli_select_db($con, 'utf8');

			return $con;
		}

	}
?>