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
    <table border=1 class="table table-striped" > 
      <thead> 
        <tr> 
          <th>title</th> 
          <th>desc</th> 
          <th>category</th> 
        </tr> 
      </thead>
    <tbody> 
        <?php 
            $tickets = new crudtickets($db); 
            $result = $tickets->read_all(); 
            while($data = mysqli_fetch_array($result)) 
              { 
              ?>       
        <tr> 
            <td><?php echo $data['title']; ?></td> 
            <td><?php echo $data['description']; ?></td> 
            <td><?php echo $data['category_id']; ?></td> 
        </tr> 
              <?php } ?> 
        </tbody>
    </table> 

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

    $id = $db->real_escape_string($_POST['id']);

	$result = $tickets->read($id);
    // echo $result;
	// form legen
	$_POST = array();
}
?>
</html>