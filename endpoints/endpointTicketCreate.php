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
		Welk woord:<br><input type="text" name="woord" id="" placeholder=""><br>
		Goedgekeurd:<br><input type="text" name="goedgekeurd" id="" placeholder=""><br>
		gradatie<br><input type="text" name="gradatie" id="" placeholder=""><br>
		<input type="submit" name="submit" value="submit"><br>
	</form>


</body>
<?php

// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");


if (isset($_POST['submit']) && $_POST['submit'] != '') {
	$database = new Database();
	$db = $database->getConnection();
	// initialize object
	$tickets = new crudtickets($db);
	// read products will be here
	// query products
    
	$a1 = 1;
	$a2 = "Hulp bij boodschappen nodig";
	$a3 = "Ik heb hulp nodig om boodschappen te halen";
    $a4 = '';
	$a5 = 2;
	$a6 = 'testwijk';
    $a7 = 1;

	echo "$a1 is Toegevoegd";
	echo "<br>";

	$result = $tickets->create($a1, $a2, $a3, $a4, $a5, $a6, $a7);
	// form legen
	$_POST = array();
}
?>
</html>