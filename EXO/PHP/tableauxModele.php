<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableaux PHP</title>
</head>

<body>
    <h1>tableau indexé</h1>
    <?php
        /*création d'un tabelau indexé */
        $jeux = array ("Uno", "7 familles", "jungle speed");
        /*accès aux élément du tableau par leur index*/
        echo "Mon premier jeu : " . $jeux[0] . " <br>Mon deuxième jeu : " . $jeux[1]
        . "<br>Mon troisième jeu : " . $jeux[2];

        /*fonction count pour connaître le nombre d'élément*/
        echo "<br><b>il y a " . count($jeux) . " jeux dans mon tableau.</b>";

        /*ajout d'un élément, si on ne précise pas d'index alors il est placé à la fin */
        $jeux[]= "Twist";
        /*affichage du contenu du tableau*/
        echo " <pre>" . print_r($jeux, true) . "</pre>";

        /*suppression d'un élément du tableau */
        unset($jeux[3]);
        echo " suppression de l'index 3 <pre>" . print_r($jeux, true) . "</pre>";

        /**ajout de plusieurs éléments */
        array_push($jeux, "Twist", "Petits chevaux");
        echo " ajout de 2 éléments <pre>" . print_r($jeux, true) . "</pre>";
    ?>
    
</body>

</html>