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
        /*$jeux[]= "Twist";*/
        /*affichage du contenu du tableau*/
        echo " <pre>" . print_r($jeux, true) . "</pre>";

        /*suppression d'un élément du tableau */
        /*unset($jeux[3]);*/
        echo " suppression de l'index 3 <pre>" . print_r($jeux, true) . "</pre>";

        /**ajout de plusieurs éléments */
        array_push($jeux, "Twist", "Petits chevaux");
        echo " ajout de 2 éléments <pre>" . print_r($jeux, true) . "</pre>";
        /*affichage du contenu avec une boucle WHILE*/
        $i=0;
        $nbJeux = count($jeux);
        echo "<p>AFFICHAGE AVEC BOUCLE WHILE</p> <ul>";
        while($i<$nbJeux){
            echo "<li>" . $jeux[$i] . "</li>";
            $i++;
        }
        echo "</ul>";

        /*affichage du contenu avec une boucle FOR*/
        /*$nbJeux = count($jeux);*/
        echo "<p>AFFICHAGE AVEC BOUCLE FOR</p> <ul>";
        for($i=0; $i<$nbJeux; $i++){
            echo "<li>" . $jeux[$i] . "</li>";
        }
        echo "</ul>";
        

        /*affichage du contenu avec une boucle FOR*/
        echo "<p>AFFICHAGE AVEC BOUCLE FOREACH</p> <ul>";
        foreach($jeux as $jeu){
            echo "<li>" . $jeu . "</li>";
        }
        echo "</ul>";

    ?>
    <h1>tableau associatif</h1>
    <?php
        /*création d'un tableau associatif */
        $prix = array ("Uno"=>25, "7 familles" => 12, "jungle speed" => 31);
        /*accès aux élément du tableau par leur index*/
        echo "Le prix du Uno: " . $prix["Uno"];

        /*fonction count pour connaître le nombre d'élément*/
        echo "<br><b>il y a " . count($prix) . " jeux associés à leur prix dans mon tableau.</b>";

        /*ajout d'un élément, si on ne précise pas d'index alors il est placé à la fin */
        $prix["Twist"]= 41;
        /*affichage du contenu du tableau*/
        echo " <pre>" . print_r($prix, true) . "</pre>";

        /*suppression d'un élément du tableau */
        unset($prix["7 familles"]);
        echo " suppression du jeu 7 familles <pre>" . print_r($prix, true) . "</pre>";
        

    ?>
    <h1>tableau multidimensionnel (2 dim)</h1>
    <?php
        /*création d'un tableau multidim */
        $JeuxInfoDim = array (array("Uno",3,6), array("7 familles", 2,4), array("jungle speed",3,8));
        /*accès aux élément du tableau par leur index*/
        echo "caractéristique du jeu Jungle speed <br>";
        echo "Nb de joueur minimum: " . $JeuxInfoDim[2][1];
        echo "<br>Nb de joueur maximum: " . $JeuxInfoDim[2][2];
        
        echo "<br><b>il y a " . count($JeuxInfoDim) . " jeux dans mon tableau.</b>";

        /*ajout d'un élément, si on ne précise pas d'index alors il est placé à la fin */
        array_push($JeuxInfoDim, array("Twist",2,3));

        /*suppression d'un élément du tableau */
        unset($JeuxInfoDim[1]);
        echo " suppression du jeu 7 familles <pre>" . print_r($JeuxInfoDim, true) . "</pre>";

         /*affichage du contenu du tableau*/
         echo " <pre>" . print_r($JeuxInfoDim, true) . "</pre>";

    ?>
</body>

</html>