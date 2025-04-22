<?php
require_once('../model/client.php');
require_once('../model/connx.php');

class client_controller extends connx{
    
function insert($id,$nom,$prenom,$email,$password){
    $query="INSERT INTO `employe`(`id`, `nom`, `prenom`, `email`, `password`)values (?,?, ?, ?, ?)";
    $res=$this->pdo->prepare($query); 
    return $res->execute(array($id,$nom,$prenom,$email,$password)); 
 }
function delete($id) {
    $query = "delete from employe where id=?";
    $res=$this->pdo->prepare($query); 
    return $res->execute(array($id));
}
function conn($id,$pass){
    $query = "select * from employe WHERE id=? and password=?";
    $res=$this->pdo->prepare($query); 
    $res->execute(array($id,$pass));
    return $res;
}
function update($id,$nom,$prenom,$email,$pass){
    
    $query = "UPDATE `employe` SET `nom`=?,`prenom`=?,`email`=?,`password`=? WHERE `id`=$id";
    $res=$this->pdo->prepare($query); 
    $res->execute(array($nom,$prenom,$email,$pass));
    return $res;
}
function afficher(){
    $query = "select * from employe";
    $res=$this->pdo->prepare($query); 
    $res->execute();
    return $res;
}

function rechercher($id) {
    $query = "SELECT nom FROM employe WHERE id=?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    return $res;
}
}
    ?>