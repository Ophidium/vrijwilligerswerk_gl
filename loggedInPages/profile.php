<?php
include '../database/connect.php';
include '../functions/UserClass.php';

if (isset($_POST["_register"]) || isset($_POST["_inloggen"]) || isset($_POST["_voltooiSubmit"]) || isset($_POST["_updateUser"])) {
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
    if (isset($_POST["_updateUser"])) {
       $userCrudClass = new UserCrud();
       $userUpdateFunction = $userCrudClass->userUpdate();
        // echo 'vanuit userCRUD.php';
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
        <a href="userCRUD.php?userID=<?php echo $getUserInfoFunction["id"] ?>">Bewerk</a>
    </div>
    <div style="flex-grow: 8" class="statsContainer">
        <div class="statsContent">
            <h3>Stats</h3>
            <p>Open tickets: 2</p>
            <p>Totaal aantal tickets: 24</p>
        </div>
    </div>
</div>
<!-- Tickets -->
<div class="ticketContainer">
    <?php
        include '../functions/ticketsCRUD.php';
        // $db = new Database;
        $tickets = new crudtickets($db); 
        $result = $tickets->read_active(); 
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
        <div class="read">
            <a href="../ticketPages/ticketDetail.php?id=<?php echo $data['id']; ?>">read</a>
        </div>
        <div class="edit">
            <a href="#">Edit</a>
        </div>
    </div>
    <?php } ?>
</div>

<?php
include '../assets/components/footer.php';
?>