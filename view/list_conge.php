<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login 03</title>
    
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="ftco-section">
        <div class="container">
        
            
           
                
                    <div class="login-wrap p-4 p-md-5">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="btn btn-warning" href="http://localhost/projet-php/view/index.php" role="button">Déconnexion</a>
                        <h3 class="mb-4">Liste congé</h3>
                        <form action="" class="login-form"  method="post">
                            
                        <a href="conge.php">Ajouter congé</a>
                            <div>
                                <table id="table_id" style="width:100%">
                                    <thead>

                                        <tr>
                                                <th scope="col">DATE DE DEBUT</th>
                                                <th scope="col">DATE DE FIN</th>
                                                <th scope="col">id_employe</th>
                                                <th scope="col">nb</th>
                                                <th scope="col">CONSULTER</th>
                                                <th scope="col">etat</th>

                                        
                                        </tr>
                                    </thead>
                                    <?php
                                        session_start();
                                        
                                        
                                        // Retrieve form data
                                        $id = $_SESSION['id']; // Récupérer l'ID de la sess
                                        require_once('../model/connx.php');
                                        require_once('../model/conge.php');
                                        require_once('../controllers/conge_controller.php');
                                        $conge_controller = new conge_controller();
                                        // Call the method to add a new congé
                                        $result = $conge_controller->list($id);
                                        
                                        while ($row = $result->fetch()) {
                                ?>        
                                
                                    <tr>


                                        <th><?=$row['date_debut']?></th>
                                        <th><?=$row['date_fin']?></th>
                                        <th><?=$row['id']?></th>
                                        <th><?=$row['nb_jours']?></th>
                                        <th><a href="modifier_conge.php?id_conge=<?=$row['id_conge']?> & date_debut=<?=$row['date_debut']?> & date_fin=<?=$row['date_fin']?> & nb_jours=<?=$row['nb_jours']?>" class="btn btn-primary rounded submit" onclick="return confirm('Voulez-vous Modifier ?')">Modifier</a></th>
                                        <th><?=$row['etat']?></th>
                                        
                                    
                                    <?php  }  ?>
                                </table>                
                            </div>

                            
                            <button type="submit" class="btn btn-primary rounded submit">Cree</button>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="index.php">Retour</a>
                            
                        </form>
                    </div>
                
            
        </div>
    </section>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
