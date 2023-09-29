

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire d'enregistrement</title>
    <link rel="stylesheet" href="formulaire.css" >
   
</head>
<body>



<form class="formulaire" action="traitement.php" method="POST">
  
<!-- password input -->
<div >
    <input type="email" id="email" name="email"  placeholder="email" />
   
  </div>

  <!-- password input -->
  <div class="password">
    <input type="password" id="password" name="password"  placeholder="mot de passe"/>
    
  </div>
  

  <!-- Submit button -->
  <div>
  <input type="submit" value="soumettre" name="submit">
  </div>
  <div>
  <h3>Vous n'avez pas de compte <a href="inscription.php">s'inscrire</a></h3>
  <div>
</form>


</body>
</html>