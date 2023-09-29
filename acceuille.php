<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    


<?php
  include("nav.php")
  ?>



  
<!-- insertion de du titre titre dans bqse -->
<?php
$bdd = new PDO('mysql:host=localhost;dbname=tp4php', 'root','',
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query("select * from bobo where id=1");
while($donnees = $reponse->fetch()){
?>
<section class="leszonesdintereteconomiq">
   <span class="titrebf"> <h1><?php echo $donnees["titre"] ?></h1></span>
   <?php
}
?>
<!-- fin insertion de du texte titr dans bqse -->



<!-- insertion de du texte paragraphe dans bqse -->
<?php

$reponse = $bdd->query("select * from bobo where id=2");
while($donnees = $reponse->fetch()){
?>
    <p>
    <?php echo $donnees["paragraphe"] ?>
</p>
<?php
}
?>
<!--fin insertion de du texte paragraphe dans bqse -->

<div class="leszones">
<!--insertion de d'une image bobo dans bqse -->
<?php

$reponse = $bdd->query("select * from bobo where id=3");
while($donnees = $reponse->fetch()){
?>
<div class="zone1titre1">
  <img  class="mesimage" src="img/<?php echo $donnees["nomimage"] ?>" alt="">
  <?php
}
?>
<!-- fin insertion de d'une image bobo dans bqse -->


  <p>Bobo-Dioulasso est un haut lieu de la culture et de <br>
     l'artisanat burkinabé. Deuxième ville la plus importante du
    </p>
</div>

<div class="zone1titre1">
   <img class="mesimage" src="img/karfi.jpg" alt="">
   <p>Les cascades de Karfiguéla sont un passage obligé <br>
    pour tout 
    visiteur de Banfora, en évitant les périodes de
  </p>
</div>

<div class="zone1titre1">
  <img class="mesimage" src="img/DOME.jpg" alt="">
  <p>Les Dômes de Fabédougou sont un site touristique burkinabé prisé <br>
    et chargé d’histoire, qu’on peut escalader avec plaisir.
  </p>
</div>
</div>
<!-- premier div -->

<div class="leszonescle1">
  <div class="zone1titre2">
<img class="mesimage" src="img/gorom.jpg" alt="">
<p>Gorom Gorom est l'une des villes majeures au nord <br>
  du Burkina Faso. Point de départ des méharées en
</p>
  </div>

<div class="zone1titre2">
  <img class="mesimage" src="img/tingrela.jpg" alt="">
  <p>Le lac de Tengréla est aussi appelé le lac aux <br>
     hippopotames.</p>
</div>

<div class="zone1titre2">
  <img  class="mesimage" src="img/ouagadougou.jpg" alt="">
  <p>Capitale du Burkina Faso, Ouagadougou est une ville <br> accueillante
     où les bons restaurants, cafés-concerts
    </p>
</div>
</div>

<!-- deuxieme div -->
<div class="zonecle2">
<div class="zone1titre3">
<img class="mesimage" src="img/sindou.jpg" alt="">
<p>Les Pics de Sindou sont des cheminées en grès 
  sacrées <br> pour les locaux de la région de Banfora. A voir absolument !
</p>
</div>

<div class="zone1titre3">
<img class="mesimage"  src="img/tiebele.jpg" alt="">
<p>Tiébélé est un village traditionnel Kassena.
</p>
</div>

<div class="zone1titre3">
<img class="mesimage"  src="img/cascade.jpg" alt="">
<p>Au cœur de la région des Cascades, Banfora est le point <br>
de départ idéal pour visiter les lieux touristiques alentours. <br>
 On peut également y
</p>
</div>
</div>
<!-- dernier div -->


  </section>
 
</section><br><br>
   <section class="kou">
    <div class="ko">
    

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/kl.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/koo.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/kou.jpg" class="d-block w-100" alt="...">
          </div>
          <p class="lo">les merveilles</p>
        </div>
       
      </div>
      
   </section>
<br><br>

<?php
  include("footer.php")
  ?>

<br>

</body>
</html>