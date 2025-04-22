<?php
require_once('../model/connx.php');

class admin extends connx {
    private $id, $nom, $prenom, $email,$password,$nb_j;

    function __construct($login = "", $password = "") {
        $this->login = $login;
        $this->password = $password;
    }

}
?>
