<?php
include '../components/navbar.php';
?>

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
    <form action="../loggedInPages/index.php" method="POST">
        <input type="text" placeholder="gebruikersnaam" name="userName">
        <input type="password" placeholder="wachtwoord" name="userWW">
        <input type="submit" name="_inloggen" value="Inloggen">
    </form>    
</body>
</html>
