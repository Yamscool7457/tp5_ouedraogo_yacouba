<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=tp4php','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


if(isset($_POST["submit"])) {
if(!empty($_POST['email']) AND !empty($_POST['password']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['message'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST["email"];
    $message = $_POST['message'];
    $password = $_POST['password'];

    $yamscool = $bdd -> prepare("INSERT INTO inscription(nom, prenom, email,  message ,password) VALUES(?, ?, ?, ?, ?)");
    $yamscool -> execute(array($nom, $prenom, $email ,$message, $password));

    $odg = $bdd -> prepare("SELECT * FROM inscription where nom=? AND prenom=? AND email=? AND message=? AND password=?");
    $odg -> execute(array($nom, $prenom, $email, $message, $password));
    if($odg -> rowCount() > 0) {
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['email'] = $email;
        $_SESSION['message'] = $message;
        $_SESSION['password'] = $password;
        header('Location: index.php');
    }
    
} else {
  echo "Veillez remplir tous les champs";
}
}
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire d'enregistrement</title>
    <link rel="stylesheet" href="formulaire.css" >
    
</head>
<body>








<form class="formulaire" method="POST">
 
<!-- password input -->
    <div >
    <input type="text" id="nom" name="nom"  placeholder="Nom" />
    </div>
  <div>
  <input type="text" id="prenom" name="prenom"  placeholder="Prenom" />
  </div>

  <div>
  <input type="email" id="email" name="email"  placeholder="Email" />
  </div>

    <div>
    <textarea name="message" id="message" cols="30" rows="5"></textarea>
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
  <h3>J'ai déjà un compte <a href="index.php">Se connecter</a></h3>
  <div>
  </form>


</body>
</html>