<?php

if(isset($_POST["submitButton"])){
    echo "bonton approved";
}
?>
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
            <h3>Connexion</h3>
           
        </div>


   <form method="POST"  action="">
    
    <input type="email"   name="email"  placeholder="Email" require>

    <input type="password"   name="pass"  placeholder="Mot de pass" require>

    <input type="submit" name="submitButton"  value="Connexion">
   </form>

   <a href="inscription.php" class="sign">vous n'avez pas de compte? Inscrivez-vous!</a>
   </div>

</div>
    
</body>
</html>