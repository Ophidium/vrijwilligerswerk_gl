<?php

// include '../database/connect.php';

include '../functions/loginFunction.php';

$createUserClass = new registerClass();
$createUserFunction = $createUserClass->createUser();

?>