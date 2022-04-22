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
<!-- <?php
include '../components/navbar.php';
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="loginContainer">
        <h2>Inloggen</h2><br>
    <div class="loginFormContainer">
        <form action="../loggedInPages/index.php" method="POST">
            <label for="userName">Gebruikersnaam</label><br>
            <input class="input" type="text" placeholder="gebruikersnaam" name="userName"><br>
            <label for="password">Wachtwoord</label><br>
            <input class="input" type="password" placeholder="wachtwoord" name="userWW"><br>
            <input class="input" type="submit" name="_inloggen" value="Inloggen">
            <br>
            <br>
            <a href="#">Wachtwoord vergeten?</a>
        </form>
    </div><br><br>
    <p>Heb jij nog geen account? Maak er dan snel een aan</p>
    </div>
</body>
</html>
