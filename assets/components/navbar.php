<?php
define("BASEURL","http://localhost/programming/vrijwilligerswerk/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="<?php echo BASEURL?>assets/style.css">
</head>
<body>
    <nav>
        <h1 id="navbarLogo">99</h1>
        <ul>
            <li>Home</li>
            <li>Over ons</li>
            <li>Contact</li>
        </ul>
    </nav>
</body>
</html>
<nav>
    <h1 class="navLink navLinkUnder" id="navbarLogo"><a href="../index.php">99</a></h1>
    <ul>
        <li><a class="navLink navLinkUnder" href="../index.php">Home</a></li>
        <li><a class="navLink navLinkUnder" href="../about.php">Over ons</a></li>
        <li><a class="navLink navLinkUnder" href="../contact.php">Contact</a></li>
        <li><a class="navLink navLinkUnder" href="../loginPages/registreren.php">Account aanmaken</a></li>
        <li><a class="navLink navLinkUnder" href="../loginPages/login.php">Inloggen</a></li>
    </ul>
</nav>
