<?php
include '../database/connect.php';
class User
{
    public $_email;
    public $_name;
    public $_lastName;
    public $_password;
    public $_passwordRPT;
    public $_hashPassword;

    public $_city;
    public $_neighbourhood;
    public $_houseNumber;
    public $_zipcode;
    public $_interest;
    public $_birthDate;
    public $_about;

    public function checkInputs()
    {
        if (isset($_GET["error"])) {
            echo "niet alles ingevuld";
        }
        if (isset($_GET["pswdFalse"])) {
            echo "wachtwoord niet hetzelfde";
        }
        if (isset($_GET["incorrect"])) {
            echo "Incorrect";
        }
    }
    public function checkPassword()
    {
        $this->_wachtwoord = $_POST["_wachtwoord"];
        $this->_wachtwoordRPT = $_POST["_wachtwoordRPT"];
        if ($this->_wachtwoord !== $this->_wachtwoordRPT) {
            header("location: ../loginPages/registreren.php?pswdFalse");
            exit();
        }
    }
}
class CreateUser extends User
{
    public function createUser()
    {
        $db = new Database;
        if (isset($_POST["_register"])) {
            if (!empty($_POST["_email"]) && !empty($_POST["_name"]) && !empty($_POST["_wachtwoord"]) && !empty($_POST["_wachtwoordRPT"]) && !empty($_POST['_lastName'])) {
                $this->_email = $_POST["_email"];
                $this->_name = $_POST["_name"];
                $this->_lastName = $_POST["_lastName"];
                $this->_wachtwoord = $_POST["_wachtwoord"];
                $this->_wachtwoordRPT = $_POST["_wachtwoordRPT"];
                $this->checkPassword();
                $this->_hashPassword = hash("sha256", $this->_wachtwoordRPT);
                $addUserQRY = $db->connection->prepare("INSERT INTO `users`(`firstName`, `lastName`, `email`, `password`) VALUES (' $this->_name',' $this->_lastName','$this->_email','$this->_hashPassword')");
                if ($addUserQRY === false) {
                    echo mysqli_error($db->connection);
                }
                if ($addUserQRY->execute()) {
                    echo "account aangemaakt";
                }
            } else {
                header("location: ../loginPages/registreren.php?error=529");
            }
        } else {
            header("location: ../?error=fout298");
        }
    }
}
class LoginUser extends User
{
    public function checkLogin()
    {
        if (isset($_POST["_inloggen"])) {
            if (!empty($_POST["_userEmail"]) && !empty($_POST["_userWW"])) {
                $db = new Database;
                $this->_email = $_POST["_userEmail"];
                $this->_password = $_POST["_userWW"];
                $this->_hashPassword = hash("sha256", $this->_password);
                $selectUserQRY = $db->connection->prepare("SELECT `email`, `password` FROM `users` WHERE email = '$this->_email' AND password = '$this->_hashPassword' ");
                if ($selectUserQRY === false) {
                    echo mysqli_error($db->con);
                }
                if ($selectUserQRY->execute()) {
                    $selectUserResult = $selectUserQRY->get_result();
                    $checkInDataBase = mysqli_fetch_array($selectUserResult);
                    if (is_array($checkInDataBase)) {
                        $this->_email = $checkInDataBase['email'];
                        $this->_hashPassword = $checkInDataBase['password'];
                        // echo 1;
                    } else {
                        echo 'fout';
                        header("location: ../loginPages/login.php?incorrect");
                    }
                }
            } else {
                header("location: ../loginPages/login.php?error");
            }
        }
    }
}

class UserInfo extends User
{
    public function addUserInfo()
    {
        if (isset($_POST["_voltooiSubmit"])) {
            if (!empty($_POST["city"]) && !empty($_POST["_neighbourhood"]) && !empty($_POST["_houseNumber"]) && !empty($_POST["_zipcode"]) && !empty($_POST["_interest"]) && !empty($_POST["_birthDate"]) && !empty($_POST["_about"])) {
                echo 1;
            }else{
                echo 0;
            }
        }else{
            echo "er ging iets fout";
        }
    }
}
