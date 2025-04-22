<?php

    require_once('../model/connx.php');
    require_once('../model/client.php');
    require_once('../controllers/client_controller.php');
    $ID=$_REQUEST['id'];                               
    $client_controller = new client_controller();
                                        
    $result = $client_controller->delete($ID);
    header('location: http://localhost/projet-php/view/compte.php');

  


?>
