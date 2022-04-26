<?php

// include '../database/connect.php';

include '../assets/components/navbar.php';

include '../functions/loginFunction.php';


// if (isset($_POST["_register"]) || isset($_POST["_inloggen"])) {
//     if (isset($_POST["_register"])) {
//         // echo "registreren";
//         $createUserClass = new registerClass();
//         $createUserFunction = $createUserClass->createUser();
//     }

//     if (isset($_POST["_inloggen"])) {
//         // echo "login";
//         $loginClass = new LoginClass();
//         $loginFunction = $loginClass->checkLogin();
//         // echo $loginFunction["userEmail"];
//     }
// } else {
//     header("location: ../?error=fout220");
// }


// echo "<br>";
// echo "logged in index.php";

?>

<!-- Stats -->
<div class="statsBarContainer">
<div style="flex-grow: 4" class="statsContainer">
    <h3>Account</h3>
    <p>Naam: Robin</p>
    <p>Email: hoppa@hoppa.com</p>
</div>
<div style="flex-grow: 8" class="statsContainer">
    <h3>Stats</h3>
    <p>Open tickets: 2</p>
    <p>Totaal aantal tickets: 24</p>
</div>
</div>

<!-- Tickets -->
<div class="ticketContainer">
    <div class="ticket">
        <div class="ticketTitle">
            <h3>Ticket 1</h3>
        </div>
        <div class="ticketImg">
            <img src="assets/images/volunteerimg.jpg" width='150px' alt="">
        </div>
        <div class="ticketDesc">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum, voluptatem quam aut ut inventore nam veritatis assumenda nulla nesciunt nihil nemo tempora, placeat rerum sequi at. Ut aspernatur quis nemo.</p>
        </div>
    </div>
    <div class="ticket">
        <div class="ticketTitle">
            <h3>Ticket 1</h3>
        </div>
        <div class="ticketImg">
            <img src="assets/images/volunteerimg.jpg" width='150px' alt="">
        </div>
        <div class="ticketDesc">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum, voluptatem quam aut ut inventore nam veritatis assumenda nulla nesciunt nihil nemo tempora, placeat rerum sequi at. Ut aspernatur quis nemo.</p>
        </div>
    </div>
    <div class="ticket">
        <div class="ticketTitle">
            <h3>Ticket 1</h3>
        </div>
        <div class="ticketImg">
            <img src="assets/images/volunteerimg.jpg" width='150px' alt="">
        </div>
        <div class="ticketDesc">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum, voluptatem quam aut ut inventore nam veritatis assumenda nulla nesciunt nihil nemo tempora, placeat rerum sequi at. Ut aspernatur quis nemo.</p>
        </div>
    </div>
</div>
<div class="ticketContainer">
    <div class="ticket">
        <div class="ticketTitle">
            <h3>Ticket 1</h3>
        </div>
        <div class="ticketImg">
            <img src="assets/images/volunteerimg.jpg" width='150px' alt="">
        </div>
        <div class="ticketDesc">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum, voluptatem quam aut ut inventore nam veritatis assumenda nulla nesciunt nihil nemo tempora, placeat rerum sequi at. Ut aspernatur quis nemo.</p>
        </div>
    </div>
    <div class="ticket">
        <div class="ticketTitle">
            <h3>Ticket 1</h3>
        </div>
        <div class="ticketImg">
            <img src="assets/images/volunteerimg.jpg" width='150px' alt="">
        </div>
        <div class="ticketDesc">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum, voluptatem quam aut ut inventore nam veritatis assumenda nulla nesciunt nihil nemo tempora, placeat rerum sequi at. Ut aspernatur quis nemo.</p>
        </div>
    </div>
    <div class="ticket">
        <div class="ticketTitle">
            <h3>Ticket 1</h3>
        </div>
        <div class="ticketImg">
            <img src="assets/images/volunteerimg.jpg" width='150px' alt="">
        </div>
        <div class="ticketDesc">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum, voluptatem quam aut ut inventore nam veritatis assumenda nulla nesciunt nihil nemo tempora, placeat rerum sequi at. Ut aspernatur quis nemo.</p>
        </div>
    </div>
</div>

<?php
include '../assets/components/footer.php';
?>