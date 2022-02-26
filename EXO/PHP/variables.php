<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables PHP</title>
</head>

<body>
    <h1>Bonjour
        <?php
        $prenom = htmlspecialchars($_GET['prenom']);
        $nom = htmlspecialchars($_GET['nom']);
        echo $prenom . " " . $nom;
        ?>
    </h1>
    <?php
    /** J'affiche le contenu de la variable global SERVER **/
   echo "<P>contenu de la variable globale SERVER <pre>" 
   . print_r($_SERVER, true) . "</pre>";

   /** J'affiche uniquement l'adresse IP du client **/
   echo "<BR> Votre adresse IP est : " . $_SERVER['REMOTE_ADDR'];
    ?>


</body>

</html>