
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAKFLIX</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="singnContainer">

   <div class="colum">

        <div class="header">
            <img src="assets/1f4fd647af43de0e8041c585ab0cee7a.png" alt="logo" title="lolgo">
            <h3>Inscription</h3>
            <samp>Beneficiez des meilleurs films</samp>
        </div>


   <form method="POST"  action="">

    <input type="text"   name="Nom"  placeholder="Nom" require>

    <input type="text"   name="Prenom"  placeholder="Prenom" require >

    <input type="text"   name="NomUtulisateur"  placeholder="Nom d'utulisateur" require>
    
    <input type="email"   name="Email"  placeholder="Email" require>

    <input type="password"   name="Pass"  placeholder="Mot de pass" require>


    <input type="password"   name="confirmPass"  placeholder="Confirmer votre mot de pass" require>

    <input type="submit" name="submitButton"  value="S'inscrire">
   </form>

   <a href="connexion.php" class="sign">vous avez déjà un compte? Connectez-vous!</a>
   </div>

</div>
    
</body>
</html>