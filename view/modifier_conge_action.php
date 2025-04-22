<?php
session_start();
// Include necessary files
require_once('../model/connx.php');
require_once('../model/conge.php');
require_once('../controllers/conge_controller.php');

// Retrieve form data
$id = $_GET['id_conge']; // Récupérer l'ID de la session
$date_debut = $_POST['date_debut'];
$date_fin = $_POST['date_fin'];
$nb = $_POST['nb'];

// Create an instance of the Conge controller
$conge_controller = new conge_controller();


// Call the method to add a new congé
$result = $conge_controller->update($id, $date_debut, $date_fin, $nb);

if ($result) {
    // Insertion réussie
    header('location: http://localhost/projet-php/view/list_conge.php');
} else {
    echo "Insertion échouée";
}
?>
