<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Gotu|Playfair+Display|Roboto+Condensed&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Playball&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style_contact.css">
    <title>Contact</title>
</head>

<body class="container-fluid wd">
<header class="row">
    <p class="">
        <img src="asset/images/monlogo.png" alt="logo">
    </p>
    <div>
        <h1>
            AOUATEF MECHEMECHE<br><span>Passionnée par la programmation!</span>
        </h1>
    </div>
    <nav class="un container-fluid">
    <ul class="nav1 navbar">
        <li><a href="index.html">Accueil</a></li>
        <li><a href="#">Certificats<span>&#9660;</span></a>
            <ul class="sous">
                <li><a href="asset/php_et_sql.pdf" target="_blank">PHP-SQL</a></li>
                <li><a href="asset/html_etcss.pdf" target="_blank">HTML-CSS</a></li>
                <li><a href="asset/formation-bureautique.JPG" target="_blank">Bureautique</a></li>
                <li><a href="asset/test_PCIE.JPG" target="_blank">Test-PCIE</a></li>
                <li><a href="asset/comprendre-le-web.pdf" target="_blank">Comprendre le web</a></li>
            </ul>
        </li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
    </nav>
</header>
<menu class="row">
    <div id="carouselExampleFade" class="carousel carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="asset/images/image1.jpg" class="d-block img-fluid" alt="image">
            </div>
            <div class="carousel-item">
                <img src="asset/images/image2.jpg" class="d-block img-fluid" alt="image">
            </div>
            <div class="carousel-item">
                <img src="asset/images/image3.jpg" class="d-block img-fluid" alt="image">
            </div>
            <div class="carousel-item">
                <img src="asset/images/image4.jpg" class=" d-block img-fluid" alt="image">
            </div>
            <div class="carousel-item">
                <img src="asset/images/image5.jpg" class="d-block img-fluid" alt="image">
            </div>
        </div>
    </div>
    <div class="form">
            <p id="merci"></p>
        <form class="contact" method="post" action="contact.php">
        <label for="nom">Nom :<br><input type="text" name="nom" placeholder="prenom  -  nom" required/></label><br>
        <label for="email">Email :<br><input type="email" name="email" required></label><br>
        <label for="message">Message :<br><textarea name="message" required></textarea></label><br>
        <button class="envoyer" name="submit" type="submit">Envoyer</button>
        </form>
    </div>

<?php
$destinataire = 'aouatef.mech@yahoo.fr';
$email = $_POST['email'];
$reponse = $email;
$nom = $_POST['nom'];
mail($destinataire, $nom, $_POST['message'],
     "From: $email\r\nReply-To: $reponse");

$atom = '[-a-z0-9!#$%&\'*+\\/=?^_`{|}~]';   // caractères autorisés avant l'arobase
$domain = '([a-z0-9]([-a-z0-9]*[a-z0-9]+)?)'; // caractères autorisés après l'arobase (nom de domaine)

$regex = '/^'.$atom.'+'.   // Une ou plusieurs fois les caractères autorisés avant l'arobase
'(\.'.$atom.'+)*'.         // Suivis par zéro point ou plus
                                // séparés par des caractères autorisés avant l'arobase
'@'.                           // Suivis d'une arobase
'('.$domain.'{1,63}\.)+'.  // Suivi par 1 &#224; 63 caractères autorisés pour le nom de domaine
                                // séparés par des points
$domain.'{2,63}$/i';          // Suivi de 2 &#224; 63 caractères autorisés pour le nom de domaine

// test de l'adresse e-mail
if (preg_match($regex, $email)) {
    echo '<p id="merci"></p>';
} else {
    echo '';
}

?>
</menu>
<div class="footer">
    <footer class="row">
        <ul>
            <li>&copy; | 2020 - Tous droits réservés</li>
            <li>CONTACT&#9990; <br>+33 7 51 53 56 31</li>
            <li><img src="asset/images/logo.png" type="logo"/></li>
        </ul>
    </footer>
</div>
  <script  type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="js/form-scripts.js"></script>
  <script src="script.js"></script>


  <script>
    document.getElementById("merci").innerHTML = "Votre message a bien été envoyé";
  setTimeout(function() {
  document.getElementById("merci").innerHTML = "";
  },4000);
 </script>

</body>
</html>