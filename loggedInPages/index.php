<?php

// include '../database/connect.php';

include '../functions/loginFunction.php';


if (isset($_POST["_register"]) || isset($_POST["_inloggen"])) {
    if (isset($_POST["_register"])) {
        // echo "registreren";
        $createUserClass = new registerClass();
        $createUserFunction = $createUserClass->createUser();
    }

    if (isset($_POST["_inloggen"])) {
        // echo "login";
        $loginClass = new LoginClass();
        $loginFunction = $loginClass->checkLogin();
        // echo $loginFunction["userEmail"];
    }
} else {
    header("location: ../?error=fout220");
}


echo "<br>";
echo "logged in index.php";
