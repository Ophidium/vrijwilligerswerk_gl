
<?php
include '../assets/components/navbar.php';
include '../functions/UserClass.php';
$createUserClass = new User();
$checkInputsFunction = $createUserClass->checkInputs();
?>

<!-- <?php include '../components/navbar.php'; ?> -->

    <div class="loginContainer">
        <h2>Inloggen</h2><br>
    <div class="loginFormContainer">
        <form action="../loggedInPages/profile.php" method="POST">
            <label for="userName">Gebruikersnaam</label><br>
            <input class="input" type="text" placeholder="gebruikersnaam" name="_userEmail"><br>
            <label for="password">Wachtwoord</label><br>
            <input class="input" type="password" placeholder="wachtwoord" name="_userWW"><br>
            <input class="button" type="submit" name="_inloggen" value="Inloggen">
            <br>
            <br>
            <a href="#">Wachtwoord vergeten?</a>
        </form>
    </div><br><br>
    <p>Heb jij nog geen account? Maak er dan snel een aan</p>
    </div>


    <!-- <?php include '../components/footer.php'; ?> -->
