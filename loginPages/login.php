<?php
include '../assets/components/navbar.php';
?>

<form action="../loggedInPages/index.php" method="POST">
    <input type="text" placeholder="gebruikersnaam" name="userName">
    <input type="text" placeholder="wachtwoord" name="userWW">
    <input type="submit" name="_inloggen" value="Inloggen">
</form>