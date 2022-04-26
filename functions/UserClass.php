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

    public $_userID;
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


    public function getUserInfo()
    {
        $db = new Database;
        if (isset($_POST["_register"]) && !empty($_POST["_email"])) {
            $this->_email = $_POST["_email"];
        }
        if (isset($_POST["_voltooiSubmit"]) || isset($_POST["_inloggen"]) && !empty($_POST["_userEmail"])) {
            $this->_email = $_POST["_userEmail"];
        }
        $getUserAccount = $db->connection->prepare("SELECT `id`, `firstName`, `lastName`, `email`, `password`, `creation_date` FROM `users` WHERE email = '$this->_email'");
        if ($getUserAccount === false) {
            echo mysqli_error($db->connection);
        }
        if ($getUserAccount->execute()) {
            $getUserID = $getUserAccount->get_result();

            while ($resultsQRY = $getUserID->fetch_assoc()) {
                $userInfoArray = [
                    "id" => $resultsQRY["id"],
                    "firstName" => $resultsQRY["firstName"],
                    "lastName" => $resultsQRY["lastName"],
                    "email" => $resultsQRY["email"],
                    "password" => $resultsQRY["password"],
                    "creation_date" => $resultsQRY["creation_date"]
                ];
                return $userInfoArray;
            }
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
                    echo mysqli_error($db->connection);
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
            if (isset($_GET["userID"]) && !empty($_POST["_city"]) && !empty($_POST["_neighbourhood"]) && !empty($_POST["_houseNumber"]) && !empty($_POST["_zipcode"]) && !empty($_POST["_interest"]) && !empty($_POST["_birthDate"]) && !empty($_POST["_about"])) {

                $db = new Database;
                $this->_userID = $_GET["userID"];
                $this->_city = $_POST["_city"];
                $this->_neighbourhood = $_POST["_neighbourhood"];
                $this->_houseNumber = $_POST["_houseNumber"];
                $this->_zipcode = $_POST["_zipcode"];
                $this->_interest = $_POST["_interest"];
                $this->_birthDate = $_POST["_birthDate"];
                $this->_about = $_POST["_about"];


                $addUserInfoQRY = $db->connection->prepare("INSERT INTO `userinfo`(`userID`, `stad`, `wijk`, `huisnummer`, `postcode`, `interesse`, `geboortedatum`, `about`) VALUES ('$this->_userID','$this->_city','$this->_neighbourhood','$this->_houseNumber','$this->_zipcode',' $this->_interest','$this->_birthDate','$this->_about')");

                if ($addUserInfoQRY === false) {
                    echo mysqli_error($db->connection);
                }
                if ($addUserInfoQRY->execute()) {
                    echo "account voltooid";
                } else {
                    echo "account niet voltooid(error)";
                }
            } else {
                echo "account niet voltooid";
            }
        } else {
            echo "er ging iets fout";
        }
    }

    public function checkUserInfo()
    {
    }
}
