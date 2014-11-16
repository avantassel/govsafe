<?php

class User {
	protected $connection 	= null;

	protected $ll 			= ''; //lat,lng

	//paging vars
	protected $limit		= 50;

	protected $offset		= 0;

	protected $total		= 0;

	public function __construct(){

		$this->connection = new Connection();
		$this->connection->Connect();

	}

	public function saveUser($post_data){

		$collection = $this->connection->getConn()->users;

		if(isset($post_data['email'])){
			$post_data['email'] = trim(strtolower($post_data['email']));
			$collection->update(array('email'=>$post_data['email'])
						,array('$set'=>$post_data)
						,array('upsert'=>true));
		} else {
			$collection->insert($post_data);
		}
	}
}
?>