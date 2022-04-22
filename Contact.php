<?php
// Page title
$title = "Contact";

// Including navbar
include 'components/navbar.php';
include 'components/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
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
</body>
</html>

<?php
// Including navbar
include 'components/footer.php';
?>
