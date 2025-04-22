<?php
require_once('../model/admin.php');
require_once('../model/connx.php');

class admin_controller extends connx{
    
function conn($login,$pass){
    $query = "select * from admin WHERE login=? and password=?";
    $res=$this->pdo->prepare($query); 
    $res->execute(array($login,$pass));
    return $res;
}

}
    ?>