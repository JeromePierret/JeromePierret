<!DOCTYPE HTML>
<?php
include '../Login2.php';

?>
<html>

<head>
	<link rel="stylesheet" href="APropos.css"/>
	<meta charset="utf-8">
	<title>ESME VMC</title>
</head>

<header> 
    <ul>
        <img src="esmevmc.png" alt="ESME">
        <li id="accspace"><ion-icon name="home-outline"></ion-icon> <a href="../MainPage/mainpage.php">Accueil</a></li>
        <li><ion-icon name="apps-outline"></ion-icon> <a href="/Application/application.php">Application</a></li>
        
        <li><ion-icon name="information-circle"></ion-icon> <a href="../APropos/APropos.php">A propos</a></li>
        <li><ion-icon name="person-circle-outline" style="float: right; height: 50px; width: 50px;"></ion-icon><br><?php  echo $_SESSION['nom'];?></li>
    </ul>
</header>
<br><br><br><br><br>
<body>
    <h1 id="txtapropos">A propos</h1>
    <p>ESME VMC ( Ventilation mécanique contrôlée ) est un système connecté permettant de contrôler à distance un système de ventilation.</p><br><br>
    <p id="txtequipe">  L'équipe :</p> 
<p> 
Suranjan JAYASUNDRA est un étudiant en deuxième année de BTS SN IR à l'ESME Sudria. Il est chargé de la conception de l'application Android et la mise en place du capteur d'humidité.<br>
<br>
Jérome PIERRET est un étudiant en deuxième année de BTS SN IR à l'ESME Sudria. Il est chargé de la conception du site web, de la mise en place du capteur de C02 ainsi que de la gestion de la base de donnée.<br>
<br>
Melvin SAVARESSE est un étudiant en deuxième année de BTS SN IR à l'ESME Sudria. Il est chargé de la connectivité entre les capteurs et les applications, de l'application à la VMC mais aussi à la mise en place du capteur de température.<br>
   
</p>
</body>






<footer>
    <p style="color: rgba(128, 128, 128, 0.904);padding-top: 20px;">Utilisez dès maintenant notre application.</p>
    <p style="color: rgba(128, 128, 128, 0.904);margin-top: 5px;">Contactez nous pour toutes questions ou suggestions.</p>   
    
    <button style="float: right;" id="contact">Contact</button>
</footer>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>