<?php
include '../assets/components/navbar.php';
include '../database/connect.php';

// pagina met ticket info

?>

<?php
        $gid = $_GET['id'];
        include '../functions/ticketsCRUD.php';
        // $db = new Database;
        $tickets = new crudtickets($db); 
        $result = $tickets->read($gid); 
        while($data = mysqli_fetch_array($result)) 
            { 
    ?>
    <div class="ticket">
        <div class="ticketTitle">
            <h3><?php echo $data['title']; ?></h3>
        </div>
        <div class="ticketImg">
            <img src="../assets/images/volunteerimg.jpg" width='150px' alt="">
        </div>
        <div class="category">
            <p><?php echo $data['category_id']; ?></p>
        </div>
        <div class="ticketDesc">
            <p><?php echo $data['description']; ?></p>
        </div>
    </div>
    <textarea name="comments" id="" cols="30" rows="10"></textarea>
    <?php } ?>


<?php

include '../assets/components/footer.php';

?>

