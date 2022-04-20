<?php

class crudusers
{
	private $connection;
	private $tableName = "users";

	public function __construct($db)
	{
       $this->connection = $db;
	}

	public function read($id)
	{
		$query = "SELECT * FROM " .$this->tableName . " WHERE id=$id";
		$result = $this->connection->query($query);
		return $result;
	}

	public function read_all()
	{
		$query = "SELECT * FROM " .$this->tableName;
		$result = $this->connection->query($query);
		return $result;
	}

	// product
	public function create($firstName, $lastName, $email, $password)
	{
        // $currentDate = new date();
		$query = "INSERT INTO " .$this->tableName. " ( `firstName`, `lastName`, `email`, `password`) VALUES
        ('$firstName', '$lastName', '$email',  '$password')";
		$result = $this->connection->query($query);
		if ($result) {
			echo 'Data created in database.';
		}
	}

	public function update($id, $firstName, $lastName, $email)
	{
		$query  = "UPDATE ". $this->tableName. " SET `firstName`='$firstName', `lastName`='$lastName', `email`='$email' WHERE id='$id'";
		$result = $this->connection->query($query);
		if ($result) {
			echo 'Data updated in database.';
		}
	}

	public function delete($id)
	{
		$query = "DELETE FROM $this->tableName WHERE id='$id'";
		$result = $this->connection->query($query);
		if ($result) {
			echo 'Data deleted from database.';
		}
	}
}