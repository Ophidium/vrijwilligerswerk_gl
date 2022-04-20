<?php
include '../database/connect.php';
class registerClass
{


    public $_email;
    private $_name;
    private $_lastName;
    private $_password;
    private $_passwordRPT;
    private $_hashPassword;


    public function checkInputs()
    {
        if (isset($_GET["error"])) {
            echo "niet alles ingevuld";
        }
        if (isset($_GET["pswdFalse"])) {
            echo "wachtwoord niet hetzelfde";
        }
    }
    private function checkPassword()
    {

        $this->_wachtwoord = $_POST["_wachtwoord"];
        $this->_wachtwoordRPT = $_POST["_wachtwoordRPT"];
        if ($this->_wachtwoord !== $this->_wachtwoordRPT) {
            header("location: ../loginPages/registreren.php?pswdFalse");
            exit();
        }
    }

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

class LoginClass extends registerClass{

    public function checkLogin(){

        if(isset($_POST["_inloggen"])){
            echo "1";
        }else{
            echo 0;
        }

    }

}

