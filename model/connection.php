<?php
	require_once('../controller/dbController.php');
	require_once('../controller/systemController.php');

	$dbController = new dbController();
	$con = $dbController->connect_db();
	$systemController = new systemController($con);

?>