<?php

include '../functions/UserClass.php';
include '../assets/components/navbar.php';

$createUserClass = new User();
$checkInputsFunction = $createUserClass->checkInputs();
?>

<div class="registerContainer">
    <h2>Account aanmaken</h2><br>
    <div class="registerFormContainer">
        <form method="POST" action="../loggedInPages/profile.php">
            <label for="email">Email</label>
            <input type="text" placeholder="Email" name="_email">
            <br>
            <label for="naam">Naam</label>
            <input type="text" placeholder="naam" name="_name">
            <br>
            <label for="achterNaam">Achternaam</label>
            <input type="text" placeholder="achternaam" name="_lastName">
            <br>
            <label for="ww">Wachtwoord</label>
            <input type="text" placeholder="wachtwoord" name="_wachtwoord">
            <br>
            <label for="hhww">Herhaal Wachtwoord</label>
            <input type="text" placeholder="herhaal wachtwoord" name="_wachtwoordRPT">
            <br>
            <input class="button registerFormButton" name="_register" type="submit" value="registreer">
        </form>
    </div>
</div>
