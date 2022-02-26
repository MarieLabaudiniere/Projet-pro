<html lang="fr">

<head>
    <title>Conditions et switch PHP</title>
    <?php
    function Age($date_naissance)
    {
        /*transformation des dates sous forme de tableaux. à la place 0 : année, 1: mois, 2 : jour*/
        $tabloDateNaissance = explode('-', $date_naissance);
        $tabloDateCourante = explode('-', date('Y-m-d'));
        /*si le mois de naissance est antérieur au mois courant OU si le mois de naissance est égal 
            au mois courant et que le jour de naissance est inférieur ou égal au mois courant alors on retourne
            l'année courante - l'année de naissance*/
        if (($tabloDateNaissance[1] < $tabloDateCourante[1])
            || (($tabloDateNaissance[1] == $tabloDateCourante[1]) && 
                ($tabloDateNaissance[2] <= $tabloDateCourante[2]))
        ) {
            return $tabloDateCourante[0] - $tabloDateNaissance[0];
        } else {
            /*dans les autres cas , on retourne l'année courante - année de naisssance -1*/
            return $tabloDateCourante[0] - $tabloDateNaissance[0] - 1;
        }
    }
    ?>
</head>

<body>
    <h1>Bienvenue
        <?php
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        echo $prenom . " " . $nom . " ! ";
        ?>
    </h1>
    <?php
    if (isset($_POST['dateNaissance'])) {
        /*isset permet de vérifier l'existence du paramètre dateNaissance. Si la date n'a pas été saisie
        alors on n'exécute aucun code*/
        $date_naissance = $_POST['dateNaissance'];
        $age = Age($date_naissance);
        echo "Votre age est : <b>" . $age . "</b> ans. <br>";
        /*
        **
        ** LES CONDITIONS
        **
        /* condition avec uniquement if */
        if ($age === 22) {
            echo "Je suis affiché si $age est === 22";
        }

        /* condition avec if ... else */
        if ($age >= 18) {
            echo "Vous pouvez passer le permis!";
        } else {
            echo "Encore un peu de patience… Pour le permis c'est à 18 ans";
        }

        echo "<br>";

        /* condition avec if ... elseif ... else*/
        if ($age >= 18 && $age <= 26) {
            echo "Vous êtes jeune.";
        } elseif ($age > 26 && $age <= 50) {
            echo "Vous n'êtes plus très jeune";
        } else {
            echo "Vous faites partie des séniors.";
        }

        /*
        **
        ** SWITCH
        **
       /* du cas par cas avec switch */
        $tabloDateNaissance = explode('-', $date_naissance);
        $moisNaissance = $tabloDateNaissance[1];
        echo "<br><p>Concernant votre mois de naissance</p>";
        switch ($moisNaissance) {
            case 1 : 
                echo "vous êtes né en janvier";
                break;
            case 2 : 
                echo "vous êtes né en février";
                 break;
            case 3 : 
                echo "vous êtes né en mars";
                break;
            case 4 : 
                echo "vous êtes né en avril";
                break;
            case 5 : 
                echo "vous êtes né en mai";
                break;
            default :
            echo "Vous êtes né après mai.";
        }
    }
    
    ?>

</body>

</html>