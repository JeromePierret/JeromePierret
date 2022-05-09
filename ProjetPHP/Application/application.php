<!DOCTYPE HTML>
<?php
include '../Login2.php';

$user = 'root';
$password = '';

$db = new PDO('mysql:host=localhost;dbname=esmevmc', $user, $password);
?>
<html>

<head>
	<link rel="stylesheet" href="application.css"/>
	<meta charset="utf-8">
	<title>ESME VMC</title>
</head>

<header> 
    <ul>
        <img src="../MainPage/Esmevmc.png" alt="ESME">
        <li id="accspace"><ion-icon name="home-outline"></ion-icon> <a href="../MainPage/mainpage.php">Accueil</a></li>
        <li><ion-icon name="apps-outline"></ion-icon> <a href="/Application/application.php">Application</a></li>
        <li><ion-icon name="information-circle"></ion-icon> <a href="/APropos/APropos.php">A propos</a></li>
        <li><ion-icon name="person-circle-outline" style="float: right; height: 50px; width: 50px;"></ion-icon><br><?php  echo $_SESSION['nom'];?></li>
    </ul>
</header>
<br><br><br><br><br><br><br><br>
<body>
    

<div class="ventilationmode"> 
    
<p class="modevtxt">Mode de ventilation</p>
<p>
<p><input class="modetxt" type="checkbox">Mode ventilation faible</p>
<p><input class="modetxt" type="checkbox">Mode ventilation normal</p>
<p><input class="modetxt" type="checkbox">Mode ventilation élevé</p>
<p><button class="confirmer">Confirmer</button></p><br><br><br>
</p>
<p style="color:#d47c7c;">ATTENTION: Le mode de ventilation est défini automatiquement, vous pouvez toutefois le changer si vous le souhaitez</p>
<hr>
<p>MODE ACTIF: $VentilationMode</p>
</div>   



    <div class="show2">
        <p>Co2</p>
    <hr>
    <?php
    $sql ="SELECT co2 FROM mesures";
    $co2 = $db->query($sql);
    ?>
        <p>
            <?php 
            foreach ($db->query($sql) as $row){
            print $row['co2'] . "\t";}
            ?> 
            PPM (parti par minute)</p>
    </div><br>
    

    <div class="show2">
    <?php
    $sql ="SELECT humidite FROM mesures";
    $co2 = $db->query($sql);
    ?>
    <p> Humidité</p>
    <hr>
    <p> <?php 
            foreach ($db->query($sql) as $row){
            print $row['humidite'] . "\t";}
            ?> %</p>
    </div>
    

    <div class="show2">
    <?php
    $sql ="SELECT temperature FROM mesures";
    $co2 = $db->query($sql);
    ?>
    <p> température</p>
    <hr>
    <p><?php 
            foreach ($db->query($sql) as $row){
            print $row['temperature'] . "\t";}
            ?> °C</p>
    </div>
</body>







<footer>
    <p style="color: rgba(128, 128, 128, 0.904);padding-top: 20px;">Utilisez dès maintenant notre application.</p>
    <p style="color: rgba(128, 128, 128, 0.904);margin-top: 5px;">Contactez nous pour toutes questions ou suggestions.</p>   
    
    <button style="float: right;" id="contact">Contact</button>
</footer>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>