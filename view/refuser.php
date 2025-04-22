<?php

    require_once('../model/connx.php');
    require_once('../model/conge.php');
    require_once('../controllers/conge_controller.php');
    $ID=$_REQUEST['id'];                               
    $conge_controller = new conge_controller();
                                        
    $result = $conge_controller->refuser($ID);
    header('location: http://localhost/projet-php/view/list_admin.php');

  


?>
