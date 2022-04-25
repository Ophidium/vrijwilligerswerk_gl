<?php
include '../assets/components/navbar.php'
?>
<p>Voltooi je account door dit in te vullen:</p>
<form method="POST" action="profile.php">
    <input placeholder="stad" name="_city" type="text">
    <input placeholder="wijk" name="_neighbourhood" type="text">
    <input placeholder="huisnummer" name="_houseNumber" type="text">
    <input placeholder="postcode" name="_zipcode" type="text">
    <input placeholder="interesse" name="_interest" type="text">
    <input placeholder="geboortedatum" name="_birthDate" type="text">
    <input placeholder="Over jezelf" name="_about" type="text">
    <input type="submit" name="_voltooiSubmit" value="voltooi">
</form>