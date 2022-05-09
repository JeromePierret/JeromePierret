<?php
$user = 'root';
$password = '';


    $db = new PDO('mysql:host=localhost;dbname=esmevmc2', $user, $password);
    //print "Connection à la base de donnée réussie <br/>";

if(isset($_POST['reinitialisertable'])){

    //Variables des champs à remplir


$requete = $db->query("TRUNCATE TABLE `utilisateur`");
echo "<div>La table utilisateur a été vidée</div>";
echo "<script language=javascript> setTimeout(function(){}, 2500);</script>";
$cssFile = "affichage.css";
     echo "<link rel='stylesheet' href='" . $cssFile . "'>";
     echo "<table>";
echo "<div><br/>Vous allez être redirigé sous peu..</div>";
echo "<script language=javascript> setTimeout(function(){ window.location.href='adminpage.html'}, 2500);</script>";



//$affichage = $requete->fetch();

//echo $affichage['login'];
}
if(isset($_POST['Voirutilisateur'])){

    //Variables des champs à remplir


$requete = $db->query("SELECT * FROM utilisateur");
echo "Liste des utilisateurs :<br/><br/>";

$cssFile = "affichage.css";
     echo "<link rel='stylesheet' href='" . $cssFile . "'>";
     echo "<table>";
while($affichage = $requete->fetch())
{

echo "<tr><td>". $affichage['login'] . "<tr/><td/> <tr><td> Password: " .$affichage['password'] . " <tr/><td/> <tr><td>Mail: " .$affichage['mail']. "<tr/><td/><br/>";
}
echo "<table/>";

echo "<br/><br/>Vous allez être redirigé sous peu..<br/><br/>";
echo "<script language=javascript> setTimeout(function(){ window.location.href='adminpage.html'}, 10000);</script>";




//$affichage = $requete->fetch();

//echo $affichage['login'];
} 
?>

