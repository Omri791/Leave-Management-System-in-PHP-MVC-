<?php
require_once('../model/connx.php');

class Client extends connx {
    private $id, $nom, $prenom, $email,$password,$nb_j;

    function __construct($id = "", $nom = "", $prenom = "", $email = "", $password = "", $nb_j = "") {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->password = $password;
        $this->nb_j = $nb_j;
    }

    public function getid() {
        return $this->id;
    }
    public function getnom() {
        return $this->nom;
    }
    public function getprenom() {
        return $this->prenom;
    }
    public function getemail() {
        return $this->email;
    }
    public function getpassword() { 
        return $this->password;
    }
    public function getnb_j() {
        return $this->nb_j;
    }
}
?>
