<?php

	$result = $_POST;
	$result['success']=true;
	
	header("Access-Control-Allow-Origin: *");
	header("Content-type: application/json");
	if(isset($_GET['callback']))
		echo $_GET['callback'] . ' (' . json_encode($result) . ');';	
	else
		echo json_encode($result);
	
?>