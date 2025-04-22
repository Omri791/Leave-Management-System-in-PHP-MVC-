<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login 03</title>
    
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="style1.css">
</head>
<body>
    <section class="ftco-section">
        <div class="container">
            
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <h3 class="mb-4">Crée compte</h3>
                        <form action="ajouteClient_action2.php" class="login-form"  method="post">
                            <input type="text" class="form-control rounded-left mb-4" id="id" name="id" placeholder="Id" required>
                            <input type="text" class="form-control rounded-left mb-4" id="nom" name="nom" placeholder="Nom" required>
                            <input type="text" class="form-control rounded-left mb-4" id="prenom" name="prenom" placeholder="Prenom" required>
                            <input type="text" class="form-control rounded-left mb-4" id="email" name="email" placeholder="Email" required>
                            <input type="password" class="form-control rounded-left mb-4" id="password" name="password"  placeholder="Password" required>
                            <label class="checkbox-wrap checkbox-primary mb-4">
                                <input type="checkbox" checked> Save Password
                                <span class="checkmark"></span>
                            </label>
                            <button type="submit" class="btn btn-primary rounded submit">Cree</button>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="index.php">Retour</a>
                            
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
