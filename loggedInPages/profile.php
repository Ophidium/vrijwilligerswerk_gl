<?php
// include '../database/connect.php';
include '../functions/UserClass.php';
if (isset($_POST["_register"]) || isset($_POST["_inloggen"]) || isset($_POST["_voltooiSubmit"])) {
    if (isset($_POST["_register"])) {
        $createUserClass = new CreateUser();
        $createUserFunction = $createUserClass->createUser();
        // echo "vanout create";
    }
    if (isset($_POST["_inloggen"])) {
        $loginClass = new LoginUser();
        $loginFunction = $loginClass->checkLogin();
        // echo "vanout login";
    }
    if (isset($_POST["_voltooiSubmit"])) {
        $userInfoClass = new UserInfo();
        $userInfoFunction = $userInfoClass->addUserInfo();
        // echo 'vanuit addProfileInfo.php';
    }
    $userClass = new User();
    $getUserInfoFunction = $userClass->getUserInfo();
} else {
    header("location: ../?error=fout220");
}
include '../assets/components/navbar.php';
?>
<a href="addProfileInfo.php?email=<?php echo $getUserInfoFunction["email"] ?>&&userID=<?php echo $getUserInfoFunction["id"] ?>">account voltooien</a>




<!-- Stats -->
<div class="statsBarContainer">
    <div style="flex-grow: 4" class="statsContainer">
        <h3>Account</h3>
        <p>Naam: <?php echo $getUserInfoFunction["firstName"] ?></p>
        <p>Email: <?php echo $getUserInfoFunction["email"] ?></p>
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
            <img src="../assets/images/volunteerimg.jpg" width='150px' alt="">
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
            <img src="../assets/images/volunteerimg.jpg" width='150px' alt="">
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
            <img src="../assets/images/volunteerimg.jpg" width='150px' alt="">
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
            <img src="../assets/images/volunteerimg.jpg" width='150px' alt="">
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
            <img src="../assets/images/volunteerimg.jpg" width='150px' alt="">
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
            <img src="../assets/images/volunteerimg.jpg" width='150px' alt="">
        </div>
        <div class="ticketDesc">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum, voluptatem quam aut ut inventore nam veritatis assumenda nulla nesciunt nihil nemo tempora, placeat rerum sequi at. Ut aspernatur quis nemo.</p>
        </div>
    </div>
</div>

<?php
include '../assets/components/footer.php';
?>