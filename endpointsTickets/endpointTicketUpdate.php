<?php

// include 'assets/components/navbar.php';
include '../database/connect.php';
include '../functions/ticketsCRUD.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create</title>
</head>

<body>

	<form action="" method="post">
		titel:<br><input type="text" name="title" id="" placeholder=""><br>
		Desc:<br><input type="text" name="desc" id="" placeholder=""><br>
		Category:<br><input type="text" name="category_id" id="" placeholder=""><br>
        locatie::<br><input type="text" name="location" id="" placeholder=""><br>
        active:<br><input type="text" name="active" id="" placeholder=""><br>

        <input type="submit" name="submit" value="submit"><br>
	</form>


</body>
<?php

// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");


if (isset($_POST['submit']) && $_POST['submit'] != '') {
	// $database = new Database();
	// $db = $database->getConnection();
	// initialize object
	$tickets = new crudtickets($db);
	// read products will be here
	// query products
    
	// $id = $db->real_escape_string($_POST['id']);


    $id = 0;
	$title = $db->real_escape_string($_POST['title']);
	$desc = $db->real_escape_string($_POST['desc']);
    $images = '';
	$category_id = $db->real_escape_string($_POST['category_id']);
	$location = $db->real_escape_string($_POST['location']);
    $active = $db->real_escape_string($_POST['active']);

	echo "$title is Toegevoegd";
	echo "<br>";

	$result = $tickets->update($id, $title, $desc, $images, $category_id, $location, $active);
	// form legen
	$_POST = array();
}
?>
</html>