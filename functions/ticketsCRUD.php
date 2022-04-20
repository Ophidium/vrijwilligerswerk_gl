<?php

class crudtickets
{
	private $connection;
	private $tableName = "tickets";

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
	public function create($user_id, $title, $desc, $img, $category_id, $location, $active)
	{
        // $currentDate = new date();
		$query = "INSERT INTO " .$this->tableName. " ( `user_id`, `title`, `description`, `date`, `images`, `category_id`, `location`, `active`) VALUES
        ('$user_id', '$title', '$desc',  now(), '$img', '$category_id', '$location', '$active')";
		$result = $this->connection->query($query);
		if ($result) {
			echo 'Data created in database.';
		}
	}

	// public function update($id, $title, $desc, $img, $category_id, $location, $active)
	// {
	// 	$query  = "UPDATE ". $this->tableName. " SET `Woord`='$woord', Goedgekeurd='$gekeurd', Gradatie='$grade' WHERE id='$id'";
	// 	$result = $this->connection->query($query);
	// 	if ($result) {
	// 		echo 'Data updated in database.';
	// 	}
	// }

	// public function delete($id)
	// {
	// 	$query = "DELETE FROM $this->tableName WHERE id='$id'";
	// 	$result = $this->connection->query($query);
	// 	if ($result) {
	// 		echo 'Data deleted from database.';
	// 	}
	// }
}