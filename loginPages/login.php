<?php
include '../assets/components/navbar.php';

include '../functions/loginFunction.php';

$createUserClass = new registerClass();
$checkInputsFunction = $createUserClass->checkInputs();
?>

<form action="../loggedInPages/index.php" method="POST">
    <input type="text" placeholder="E-mail" name="_userEmail">
    <input type="text" placeholder="wachtwoord" name="_userWW">
    <input type="submit" name="_inloggen" value="Inloggen">
</form>