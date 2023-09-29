

<?php
$bdd = new PDO('mysql:host=localhost;dbname=tp4php', 'root','',
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if(isset($_POST["submit"])) {
if(!empty($_POST['email']) AND !empty($_POST['password'])) {
  $email = $_POST["email"];
  $password = $_POST['password'];
  $odg = $bdd -> prepare("SELECT * FROM inscription where email=? AND password=?");
  $odg -> execute(array($email, $password));
  if($odg -> rowCount() > 0) {
      
      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;

      header('Location: acceuille.php');
  }else {
  echo 'mot de passe ou email incorrect';
  }
  
}
  }

?>