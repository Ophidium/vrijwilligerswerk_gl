<?php

include '../components/navbar.php'

// include '../functions/loginFunction.php';


// $createUserClass = new registerClass();
// $checkInputsFunction = $createUserClass->checkInputs();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <form method="POST" action="../loggedInPages/index.php">
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
</body>
</html>

