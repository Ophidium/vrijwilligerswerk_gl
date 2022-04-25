<?php

include '../functions/UserClass.php';
include '../assets/components/navbar.php';
$createUserClass = new User();
$checkInputsFunction = $createUserClass->checkInputs();
?>
<form method="POST" action="../loggedInPages/profile.php">
    <input type="text" placeholder="Email" name="_email">
    <br>
    <input type="text" placeholder="naam" name="_name">
    <br>
    <input type="text" placeholder="achternaam" name="_lastName">
    <br>
    <input type="text" placeholder="wachtwoord" name="_wachtwoord">
    <br>
    <input type="text" placeholder="herhaal wachtwoord" name="_wachtwoordRPT">
    <br>
    <input name="_register" type="submit" value="registreer">
</form>
<?php
include '../assets/components/footer.php';
?>