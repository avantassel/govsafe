<?php

	require_once 'lib/load.php';

	$rs = new RedCross;

	$result = $rs->GetCenters();

	header("Access-Control-Allow-Origin: *");
	header("Content-type: application/json");
	if(isset($_GET['callback']))
		echo $_GET['callback'] . ' (' . json_encode($result) . ');';	
	else
		echo json_encode($result);
	
?>