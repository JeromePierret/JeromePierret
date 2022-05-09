<?php
session_start();
$user = 'root';
$password = '';

//Connection BDD avec PDO
$db = new PDO('mysql:host=localhost;dbname=esmevmc', $user, $password);
//print "Connection à la base de donnée réussie <br/>";


if (isset($_POST['login']) && isset($_POST['password']))
{
    
    $nomutilisateur = $_POST['login'];
    $motdepasse = $_POST['password'];
    $_SESSION['nom'] = $nomutilisateur;
    
    echo "Bonjour " . $_POST['login'] . "!";

    $sql ="SELECT * FROM utilisateur WHERE nomutilisateur = '$nomutilisateur' AND motdepasse = '$motdepasse'";
    $resultat = $db->query($sql);

    if ($resultat->rowCount()){
        echo "réussie";
        echo "<script language=javascript> setTimeout(function(){ window.location.href='MainPage/Mainpage.php'}, 50);</script>";
    
    }
    else if(!$resultat->rowCount()){
        print "non réussie";
        header("Location: login.php?erreur=Nom d'utilisateur ou mot de passe incorrect, réessayez.");
    }
    if(empty($nomutilisateur)){
        header("Location: login.php?erreur=Veuillez saisir un nom d'utilisateur.");
    }
    if(empty($motdepasse)){
        header("Location: login.php?erreur=Veuillez saisir un mot de passe.");
    }
    if(empty($motdepasse) && empty($nomutilisateur)){
        header("Location: login.php?erreur=Veuillez remplir les champs de connexion et réessayez.");
    }
}


?>