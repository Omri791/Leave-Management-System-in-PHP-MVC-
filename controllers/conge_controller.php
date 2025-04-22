<?php
require_once('../model/conge.php');
require_once('../model/connx.php');

class conge_controller extends connx{
    
function insert($id,$date_debut,$date_fin,$nb_j,$etat){
    $query="INSERT INTO `conge`(`id`, `date_debut`, `date_fin`, `nb_jours`, `etat`) VALUES (?,?,?,?,?)";
    $res=$this->pdo->prepare($query); 
    return $res->execute(array($id,$date_debut,$date_fin,$nb_j,$etat)); 
 }
function delete($id) {
    $query = "delete from employe where id=?";
    $res=$this->pdo->prepare($query); 
    return $res->execute(array($id));
}
function update($id, $date_debut, $date_fin, $nb){
    $query = "UPDATE `conge` SET `date_debut`='$date_debut', `date_fin`='$date_fin', `nb_jours`=$nb WHERE `id_conge`=$id";
    $res = $this->pdo->prepare($query); 
    $res->execute();
    return $res;
}


function accepter($id) {
    $query = "update conge set etat='accepter' where id_conge=?";
    $res=$this->pdo->prepare($query); 
    return $res->execute(array($id));
}
function refuser($id) {
    $query = "update conge set etat='refuser' where id_conge=?";
    $res=$this->pdo->prepare($query); 
    return $res->execute(array($id));
}

function conn($id,$pass){
    $query = "select * from employe WHERE id=? and password=?";
    $res=$this->pdo->prepare($query); 
    $res->execute(array($id,$pass));
    return $res;
}

function list($id) {
    $query = "SELECT * FROM conge where id=? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    return $res;
}
function listall() {
    $query = "SELECT * FROM conge  ";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}
}
    ?>