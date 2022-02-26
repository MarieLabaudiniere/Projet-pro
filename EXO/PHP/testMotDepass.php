<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de passe</title>
</head>
<body>
    <?php
        $mdp1 = "jujuJUJU1";
        echo testPwd($mdp1);

        function testPwd($mdp){
            /*longueur du mot de passe*/
            $longueur = strlen($mdp);
            $contInt = false;
            /*parcours de la chaine de caractère*/
            $msg = "";
            if ($longueur < 8) {
                return "Votre mot de passe est trop court. Il doit contenir 8 caractères.";
            }
            for($i = 0; $i < $longueur; $i++) 	{
                /*On sélectionne une à une chaque lettre
	            $i étant à 0 lors du premier passage de la boucle*/
	            $caractere = $mdp[$i];
                if (is_numeric($caractere)) {
                    $contInt = true;
                }
            }
            if (!$contInt) {
                return "Vous devez avoir au moins un chiffre dans votre mot de passe";
            }
            return "Excellent mot de passe";
        }
    ?>
</body>
</html>