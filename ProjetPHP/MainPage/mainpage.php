<!DOCTYPE HTML>
<?php
include '../Login2.php';

?>
<html>

<head>
	<link rel="stylesheet" href="mainpage.css"/>
	<meta charset="utf-8">
	<title>ESME VMC</title>
</head>

<header> 
    <ul>
        <img src="esmevmc.png" alt="ESME">
        <li id="accspace"><ion-icon name="home-outline"></ion-icon> <a href="">Accueil</a></li>
        <li><ion-icon name="apps-outline"></ion-icon> <a href="/Application/application.php">Application</a></li>
        <li><ion-icon name="information-circle"></ion-icon> <a href="/APropos/APropos.php">A propos</a></li>
        <li><ion-icon name="person-circle-outline" style="float: right; height: 50px; width: 50px;"></ion-icon><br><?php  echo $_SESSION['nom'];?></li>
    </ul>
</header>
<br><br><br><br><br>
<body>
    
    <br><br><br><br>
    <p style="margin-top: 50px;">
        <span style="font-size: 50px;">ESME VMC</span><br> est une application de ventilation mécanique contrôlé, qui va gérer les données afin de les ajustées et être dans de bonne condition
    </p>
   
   <br>
   <div class="show">
   <ion-icon id="prlogo" name="desktop-outline"></ion-icon>
   <p id="presentation">Interface esthetique</p>

   <ion-icon style="color:rgb(13, 197, 13);" id="prlogo" name="play-sharp"></ion-icon>
   <p style="color:rgb(30, 168, 30);" id="presentation">Facile à prendre en main</p>

   <ion-icon style="color:yellow;" id="prlogo" name="document-text-outline"></ion-icon>
   <p style="color:yellow;" id="presentation">Récapitulatif complet et actions automatiques et intelligentes</p>
<br> 
</div>
<div class="nouveaute">
   <p> Nouveauté : <hr></p>
   <hr>
   - Refonte de l'interface<br><br><br><br><br><br><br><br><br>
</div>

<br><br><br>
<div id="possibilite">
<p>- Possibilité de définir le mode de ventilation</p>
<p>- Possibilité d'automatiser la ventilation météo</p>
</div>






<footer>
    <p style="color: rgba(128, 128, 128, 0.904);padding-top: 20px;">Utilisez dès maintenant notre application.</p>
    <p style="color: rgba(128, 128, 128, 0.904);margin-top: 5px;">Contactez nous pour toutes questions ou suggestions.</p>   
    
    <button style="float: right;" id="contact">Contact</button>
</footer>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>