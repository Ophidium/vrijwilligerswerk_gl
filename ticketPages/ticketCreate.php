<?php
include '../assets/components/navbar.php';

// pagina met ticket info

?>

<body>

    <div class="container">
        <form action="" method="post">
            <label for="title">Titel:</label>
		    <input type="text" name="title" id="title" placeholder=""><br>
            <label for="desc">Desc:</label><br>
		    <textarea name="desc" id="desc" cols="30" rows="10"></textarea><br>
		    <label for="category">Category</label>
            <select id="category" name="category_id">
                <option value="0">praten</option>
                <option value="1">tuinwerk</option>
                <option value="2">winkelen</option>
            </select><br>
            <label for="location">locatie:</label>
            <input type="text" name="location" id="location" placeholder=""><br>
            <label for="active">active:</label>
            <input type="radio" name="active" id="active" placeholder="" value=1>Yes
            <input type="radio" name="active" id="active" placeholder="" value=0>No<br>
            <input type="submit" name="submit" value="submit"><br>
	    </form>
    </div>

</body>


<?php
include '../database/connect.php';
include '../functions/ticketsCRUD.php';
if (isset($_POST['submit']) && $_POST['submit'] != '') {
	// $database = new Database();
	// $db = $database->getConnection();
	// initialize object
	$tickets = new crudtickets($db);
	// read products will be here
	// query products
    
    $user_id = 5;
	$title = $db->real_escape_string($_POST['title']);
	$desc = $db->real_escape_string($_POST['desc']);
    $images = '';
	$category_id = $db->real_escape_string($_POST['category_id']);
	$location = $db->real_escape_string($_POST['location']);
    $active = $db->real_escape_string($_POST['active']);

	echo "$title is toegevoegd.";
	echo "<br>";

	$result = $tickets->create($user_id, $title, $desc, $images, $category_id, $location, $active);
	// form legen
	$_POST = array();
}

include '../assets/components/footer.php';

?>

