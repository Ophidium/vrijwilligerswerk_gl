<?php

class crudorganisations
{
	private $connection;
	private $tableName = "organisation";

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
	public function create($user_id, $name, $about, $type, $logo, $phoneNumber, $email, $contact)
	{
        // $currentDate = new date();
		$query = "INSERT INTO " .$this->tableName. " ( `user_id`, `name`, `about`, `type`, `logo`, `phoneNumber`, `email`, `contact`) VALUES
        ('$user_id', '$name', '$about', '$type', '$logo', '$phoneNumber', '$email', '$contact')";
		$result = $this->connection->query($query);
		if ($result) {
			echo 'Data created in database.';
		}
	}

	public function update($id, $name, $about, $type, $logo, $phoneNumber, $email, $contact)
	{
		$query  = "UPDATE ". $this->tableName. " SET `name`='$name', `about`='$about', `type`='$type', `logo`='$logo', `phoneNumber`='$phoneNumber', `email`='$email', `contact`='$contact' WHERE id='$id'";
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