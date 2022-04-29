<?php
include '../assets/components/navbar.php';
include '../functions/UserClass.php';
include '../database/connect.php';
$userCrudClass = new UserCrud();
$userCrudFunctions = $userCrudClass->userRead();
?>
<?php $userCrudFunctions["creation_date"] ?>

<form action="profile.php?userID=<?php $userCrudFunctions["id"] ?>" method="POST">
    <label for="">Naam:</label>
    <input type="text" name="_updateFirstName" value="<?php echo $userCrudFunctions["firstName"] ?>">
    <br>
    <label for="">achternaam:</label>
    <input type="text" name="_updateLastName" value="<?php echo $userCrudFunctions["lastName"] ?>">
    <br>
    <input type="text" name="_updateEmail" value="<?php echo $userCrudFunctions["email"] ?>">
    <br>
    <label for="">Huidig wachtwoord</label>
    <input type="text" name="_updateCheckPswd">
    <br>
    <label for="">Nieuw wachtwoord</label>
    <input name="_updatePswd" type="password">
    <br>
    <input type="submit" name="_updateUser" value="bewerk">
</form>
<?php
include '../assets/components/footer.php';
?>