<?php
 session_start();

require_once('../model/connx.php');
require_once('../model/admin.php');
require_once('../controllers/admin_controller.php');

$login = $_POST['Login'];
$pass = $_POST['Password'];


$admin_controller=new admin_controller(); 


$result = $admin_controller->conn($login,$pass);
    

    if ($result->rowCount() > 0) {
        
        header('location: http://localhost/projet-php/view/list_admin.php');
    }else{
        header('location: http://localhost/projet-php/view/admin.php');
    }
    
    

   

?>
