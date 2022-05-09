<?php
$user = 'root';
$password = '';


    $db = new PDO('mysql:host=localhost;dbname=esmevmc2', $user, $password);
    //print "Connection à la base de donnée réussie <br/>";

if(isset($_POST)){

    //Variables des champs à remplir
$login = $_POST['login'];
$champpassword = $_POST['champpassword'];
$mail = $_POST['mail'];

if(empty($login)){
    header("Location: Inscription.php?erreur=Veuillez saisir un nom d'utilisateur.");
    exit();
}
if(empty($champpassword)){
    header("Location: Inscription.php?erreur=Veuillez saisir un mot de passe.");
    exit();
}
if(empty($mail)){
    header("Location: Inscription.php?erreur=Veuillez saisir un mail.");
    exit();
}
if(empty($mail) && empty($champpassword) || empty($login) && empty($champpassword) ){
    header("Location: Inscription.php?erreur=Veuillez remplir l'ensemble des champs.");
    exit();
}

$requete = $db->query("INSERT INTO `utilisateur` (`login`, `password`, `mail`) VALUES ('$login', '$champpassword', '$mail')");
echo "Bienvenu(e) $login, votre compte a bien été crée !";
header("Location: Inscription.php?succes=Votre inscription s'est effectuée avec succès !<br> Bienvenu(e) $login. <br> Vous allez être redirigé sous peu..");
echo "<script language=javascript> setTimeout(function(){ window.location.href='../Login.html'}, 5000);</script>";



//$affichage = $requete->fetch();

//echo $affichage['login'];
} 
?>

