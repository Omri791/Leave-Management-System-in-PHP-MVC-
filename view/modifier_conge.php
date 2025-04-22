<?php

    require_once('../model/connx.php');
    require_once('../model/client.php');
    require_once('../controllers/client_controller.php');
    $id_conge=$_REQUEST['id_conge'];     
    $date_debut = $_GET['date_debut'] ;  
    $date_fin = $_GET['date_fin'];  
    $nb_jours = $_GET['nb_jours'] ;   
                     
    
   ?>
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
            
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <h3 class="mb-4">Ajouter congé</h3>

                        <form action="modifier_conge_action.php?id_conge='<?=$id_conge?>' " class="login-form"  method="post">
                            <label>Date_debut</label>
                            <input type="date" required id="date_debut" name="date_debut"  value="<?php echo $date_debut; ?>"><br>
                            <label>Date_fin</label>
                            <input type="date" required id="date_fin" name="date_fin"  value="<?php echo $date_fin; ?>"><br>
                            <label>Nombre_jours</label>
                            <input type="text" class="form-control rounded-left mb-4" id="nb" name="nb" placeholder="Nombre jours"  value="<?php echo $nb_jours; ?>" required>
                            
                            <button type="submit" class="btn btn-primary rounded submit">Modifier</button>
							<a href="list_conge.php">Retour</a>
							
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>
