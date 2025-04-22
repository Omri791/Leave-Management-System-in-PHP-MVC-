<?php
require_once('../model/connx.php');

class conge extends connx {
    private $id_conge,$id, $date_debut, $date_fin, $nb_jours,$etat;

    function __construct( $id_conge = "",$id = "", $date_debut = "", $date_fin = "", $nb_jours = "", $etat = "") {
        $this->id_conge = $id_conge;
        $this->id = $id;
        $this->date_debut = $date_debut;
        $this->date_fin = $date_fin;
        $this->nb_jours = $nb_jours;
        $this->etat = $etat;
    }

    public function getid_conge() {
        return $this->id_conge;
    }
    public function getid() {
        return $this->id;
    }
    public function getdate_debut() {
        return $this->date_debut;
    }
    public function getdate_fin() {
        return $this->date_fin;
    }
    public function getnb_jours() { 
        return $this->nb_jours;
    }
    public function getetat() {
        return $this->etat;
    }
}
?>
