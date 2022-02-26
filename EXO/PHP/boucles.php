<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles PHP</title>
</head>

<body>
    <?php
    /** boucle WHILE */
         $x = 1;
        while ($x <= 5) {
            echo "The number is: $x <br>";
            /*incrémentation de la valeur de x, c'est à dire qu'on lui ajoute 1*/
            /*cela équivaut à $x=$x+1 */
            $x++;
        }

        $x = 0;

        while($x <= 100) {
            echo "The number is: $x <br>";
            /*augmentation de 10 de la valeur du compteur à chaque itération*/
            $x+=10;
        }

    /** boucle FOR */
        for ($x = 0; $x <= 10; $x++) {
            echo "The number is: $x <br>";
        } 
        /*même exemple avec un autre type d'incrémentation*/
        for ($x = 0; $x <= 100; $x+=10) {
            echo "The number is: $x <br>";
        } 
    /** boucle FOREACH */
        $colors = array("red", "green", "blue", "yellow");

        foreach ($colors as $value) {
            echo "$value <br>";
        }
    ?>
</body>

</html>