<?php

class Connection
{
	protected $db 	= 'govsafe';	
	
	/*
	 * General Connection settings
	 */
	
	protected $link; 
	
	protected $conn;
	
	public function __construct(){
		$this->connection_string = "mongodb://localhost/".$this->db;
	}
	
	public function getConn()
	{
		return $this->conn;
	}	
	
	public function getLink()
	{
		return $this->link;
	}	
	/*
	 * Connection functions
	 * allow these to be called to allow for multiple queries per connection 
	 */
	
	public function Connect()
	{
		$error='';
		try
		{
			$link = new MongoClient($this->connection_string);
			
			if(!empty($link)){
				$this->link=$link;
				$this->conn=$link->selectDB($this->db);				
				return true;
			}
			else{
				return false;
			}
		}
		catch (MongoConnectionException $e) 
		{
 		 	error_log('Mongo Connection Error: '.$e->getMessage());
		} 
		catch (MongoException $e) 
		{
		  	error_log('Mongo Error: '.$e->getMessage());
		}
		
		return false;		
	} 
}
?>
