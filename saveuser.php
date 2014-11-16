<?php
	
	if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
	  header("Access-Control-Allow-Origin: *");
	  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	  exit;
	}

	$data = file_get_contents("php://input");
	$result = array();
	
	if(!empty($data))
		$result = @json_decode($data,true);

	$result['success']=true;
	
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	header("Content-type: application/json");
	
	echo json_encode($result);
	
?>