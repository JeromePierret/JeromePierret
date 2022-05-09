<!DOCTYPE html>
<html>


<!-- Definition du titre de la page, de l'encodage (utf-8) et du CSS -->
<head>
    <title>ESME Weather</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<!-- Fin du Header-->


<body>
         <fieldset>
              <legend><h1 id="log"></h1></legend>
              <p id="log">Login</p>
              <img src="ESME_Weather_Logo.png" alt="login" class="imgEW" /><br>
              <?php if (isset($_GET['erreur'])) { ?>
                                <div class="erreur"><?php echo $_GET['erreur']; ?></div>
                                <?php } ?>
              <table>
                   <tr>
                        <td>
                             
                             <br/>
                         <form method="POST" action="Login2.php">
                             
                             <input id="champlogin" type="text" name="login" maxlength="256" placeholder="Nom d'utilisateur">
                         
                        </td>
                   </tr>
                   <tr>
                        <td>
                             
                             <br/>
                              <input placeholder="Mot de passe" id="champpassword" type="password" name="password" maxlength="256" value="">
                         </td>
                   </tr>
                   <tr>
                        <td>
                             <input id="champco" type="submit" name="envoyer" value="Connecter">
                             <input id="champco" type="reset" name="effacer" value="Rénitialiser">
                         </form>
                         
                         </td>
                   </tr>
              </table>
              <a href="Inscription/Inscription.html"><p id="txtinscrire">S'inscrire</p></a>
             <p id="txtmdp">Mot de passe oublié?</p>
         </fieldset>
</body>
</html>

