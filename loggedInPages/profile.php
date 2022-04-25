<?php
// include '../database/connect.php';
include '../functions/UserClass.php';
if (isset($_POST["_register"]) || isset($_POST["_inloggen"]) || isset($_POST["_voltooiSubmit"])) {
    if (isset($_POST["_register"])) {
        $createUserClass = new CreateUser();
        $createUserFunction = $createUserClass->createUser();
        // echo "vanout create";
    }
    if (isset($_POST["_inloggen"])) {
        $loginClass = new LoginUser();
        $loginFunction = $loginClass->checkLogin();
        // echo "vanout login";
    }
    if (isset($_POST["_voltooiSubmit"])) {
        $userInfoClass = new UserInfo();
        $userInfoFunction = $userInfoClass->addUserInfo();
        // echo 'vanuit addProfileInfo.php';
    }
    $userClass = new User();
    $getUserInfoFunction = $userClass->getUserInfo();

} else {
    header("location: ../?error=fout220");
}
include '../assets/components/navbar.php';
?>
<a href="addProfileInfo.php?userID=<?php echo $getUserInfoFunction["id"] ?>">account voltooien</a>

<?php 

echo '<pre>';
var_dump($getUserInfoFunction);


?>