<?php
// Including navbar
include 'assets/components/navbar.php';
include 'assets/components/header.php';
?>
    <div class="contactContainer">
        <div class="contactForm">
            <form action="" method="post">
                <label for="voornaam">Voornaam</label><br>
                <input type="text" name="voorNaam"><br>
                <label for="achternaam">Achternaam</label><br>
                <input type="text" name="achterNaam"><br>
                <label for="email">Email</label><br>
                <input type="email" name="email"><br>
                <label for="bericht">Bericht</label><br>
                <textarea name="bericht"></textarea>
                <br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
        <div class="contactDetails">
            <h3>Openingstijden</h3>
            <p>Maandag t/m vrijdag van 09:00 – 17:00 uur</p>
            <h3>Contactgegevens</h3>
            <p>Tel:<br>
            0653972685
            </p><br>
            <p>email:<br>
            info@vrijwilligershuis-nieuwegein.nl
            </p>
        </div>
    </div>

<?php
// Including navbar
include 'assets/components/footer.php';
?>
