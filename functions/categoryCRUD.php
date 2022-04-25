<?php

class crudcategories
{
	private $connection;
	private $tableName = "categories";

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
	public function create($name, $desc, $active)
	{
        // $currentDate = new date();
		$query = "INSERT INTO " .$this->tableName. " ( `name`, `description`, `active`) VALUES
        ('$name' '$desc', '$active')";
		$result = $this->connection->query($query);
		if ($result) {
			echo 'Data created in database.';
		}
	}

	public function update($id, $name, $desc, $active)
	{
		$query  = "UPDATE ". $this->tableName. " SET `name`='$name', `description`='$desc', `active`='$active' WHERE id='$id'";
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