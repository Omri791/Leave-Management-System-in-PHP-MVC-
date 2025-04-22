<?php
 session_start();
// Include necessary files
require_once('../model/connx.php');
require_once('../model/client.php');
require_once('../controllers/client_controller.php');

// Retrieve form data
$id = $_POST['id'];
$pass = $_POST['password'];

// Create an instance of the Location class

$client_controller=new client_controller(); 

// Call the method to add a new location
$result = $client_controller->conn($id,$pass);
    

    if ($result->rowCount() > 0) {
        // Mot de passe correct
        $_SESSION['id'] = $id;
        header('location: http://localhost/projet-php/view/list_conge.php');
    }else{
        header('location: http://localhost/projet-php/view/index.php');
    }
    
    

   

?>
