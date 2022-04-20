<?php

// include '../database/connect.php';

include '../functions/loginFunction.php';


if (isset($_POST["_register"]) || isset($_POST["_inloggen"])) {
    if (isset($_POST["_register"])) {
        echo "registreren";
        $createUserClass = new registerClass();
        $createUserFunction = $createUserClass->createUser();
    } else {
        header("location: ../?error=regi");
    }

    if (isset($_POST["_inloggen"])) {
        echo "login";
        $loginClass = new LoginClass();
        $loginFunction = $loginClass->checkLogin();
    } else {
        header("location: ../?error=lofin");
    }
}else{
    echo "fout";
}
