<?php
	
	if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
	  header("Access-Control-Allow-Origin: *");
	  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	  exit;
	}

	require_once 'lib/load.php';
	$user = new User;

	$data = file_get_contents("php://input");
	$result = array();
	
	if(!empty($data))
		$result = @json_decode($data,true);

	if(!empty($result)){
		$user->saveUser($result);
		$result['success']=true;
	} else {
		$result['success']=false;
	}
	
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	header("Content-type: application/json");
	
	echo json_encode($result);
	
?>