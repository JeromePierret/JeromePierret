<!DOCTYPE html>
<html>


<!-- Definition du titre de la page, de l'encodage (utf-8) et du CSS -->
<head>
    <title>ESME VMC</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Inscription.css">
</head>
<!-- Fin du Header-->


<body>
         <fieldset>
              <legend><h1 id="log"></h1></legend>
              <button id="retour" style="float: left;"><a href="../Login.html"> < </a>  </button>
              <img src="ESME_Weather_Logo.png" alt="login" class="imgEW" />
              <h2 id="inscription">Inscription</h2> <br>
              
              <?php if (isset($_GET['erreur'])) { ?>
               <div class="erreur"><?php echo $_GET['erreur']; ?></div>
               <?php } ?>

              <?php if (isset($_GET['succes'])) { ?>
                                <div class="succes"><?php echo $_GET['succes']; ?></div>
                                <?php echo "<script language=javascript> setTimeout(function(){ window.location.href='../Login.html'}, 5000);</script>"; } ?>
               
              <table>
                   <tr>
                        <td>
                             
                             <br/>
                             <form method="POST" action="Inscription2.php">
                             <input id="champlogin" type="text" name="login" maxlength="256" placeholder="Nom d'utilisateur">
                        </td>
                   </tr>
                   <tr>
                        <td>
                             
                             <br/>
                             <input placeholder="Mot de passe" id="champpassword" type="password" name="champpassword" maxlength="256" value="">
                        </td>
                   </tr>
                   <tr>
                    <td>
                         
                         <br/>
                         <input placeholder="Mail" id="champpassword" type="text" name="mail" maxlength="256" value="">
                    </td>
               </tr>
                   <tr>
                        <td>
                         <div class="grpchampco">
                             <input id="champco1" type="submit" name="Valider" value="Valider">
                             <input id="champco" type="reset" name="effacer" value="Rénitialiser">
                         </div>
                         </form>
                        </td>
                   </tr>
              </table>
             
         </fieldset>
</body>
</html>