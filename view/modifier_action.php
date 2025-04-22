<?php
// Include necessary files
require_once('../model/connx.php');
require_once('../model/client.php');
require_once('../controllers/client_controller.php');

// Retrieve form data
$id = $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$pass = $_POST['password'];


// Create an instance of the Location class

$client_controller=new client_controller(); 

// Call the method to add a new location
$result = $client_controller->update($id,$nom, $prenom, $email,$pass); // Adjusted method name and parameter order

// Check if the addition was successful
if ($result) {
    echo "<script>alert('compte modifier avec succès!');</script>"; // Afficher une alerte en JavaScript
    header('location: http://localhost/projet-php/view/compte.php');
} else {
    echo "<script>alert('Erreur lors de la modification du compte.');</script>"; // Afficher une alerte en JavaScript
}
?>
