<!doctype html>
<html lang="en">
  <head>
  	<title>list_compte</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="style1.css">

	</head>
	<body>
	<section class="ftco-section">
		
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">List_comptes_employes</h2>
				</div>
			</div>
			
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<a href="signe2up.php"><h3 class="text-center mb-4">Voulez-vous ajouter nouveau compte</h3></a>
						<form action="login_admin_action.php" class="login-form" method="post">
                        <div>
                                <table id="table_id" style="width:100%">
                                    <thead>

                                        <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Nom</th>
                                                <th scope="col">Prenom</th>
                                                <th scope="col">Email</th>*
                                                <th scope="col">Consulter</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        session_start();
                                        
                                        
                                        // Retrieve form data
                                        
                                        require_once('../model/connx.php');
                                        require_once('../model/client.php');
                                        require_once('../controllers/client_controller.php');
                                        
                                        $client_controller = new client_controller();
                                        
                                        $result = $client_controller->afficher();
                                        
                                       
                                        
                                        
                                        while ($row = $result->fetch()) {

                                ?>        
                                
                                    <tr>


                                        <th><?=$row['id']?></th>
                                        <th><?=$row['nom']?></th>
                                        <th><?=$row['prenom']?></th>
                                        <th><?=$row['email']?></th>
                                        

                                        <th><a href="modifier.php?id=<?=$row['id']?> & nom=<?=$row['nom']?> & prenom=<?=$row['prenom']?> & email=<?=$row['email']?>" class="btn btn-primary rounded submit" onclick="return confirm('Voulez-vous Modifier ?')">Modifier</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="supprimer.php?id=<?=$row['id']?>" class="btn btn-primary rounded submit" onclick="return confirm('Voulez-vous Supprimer ?')">Supprimer</a></th>
                                        
                                        
                                    
                                    <?php  }  ?>
                                </table>                
                            </div>
	            
	            
	          </form>
	        </div><a href="list_admin.php" class="btn btn-primary rounded submit" >Retour</a>
				</div>
			</div>
		
	</section>

	<script src="js1/jquery.min.js"></script>
  <script src="js1/popper.js"></script>
  <script src="js1/bootstrap.min.js"></script>
  <script src="js1/main.js"></script>

	</body>
</html>

