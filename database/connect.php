<?php

class Database
{
	private		$host = "localhost";
	private		$dbName = "vrijwilligerswerk";
	private		$userName = "root";
	private		$passWord = "";
	public		$connection;


	public function __construct(){
		$this->getConnection();
	}

	public function getConnection()
	{
		$this->connection = new mysqli($this->host, $this->userName, $this->passWord, $this->dbName);
	
		if ($this->connection -> connect_errno) {
			echo "Failed to connect to MySQL: " . $this->connection -> connect_error;
			exit();
		}
		return $this->connection;
	}
}
