<?php

echo "EXERCICE 1 PARITE 1";
echo PHP_EOL;
 /* Votre code ici */

function square($length) {
    /* on définit la valeur $stars dont la valeur sera une chaîne de caractère correspondant au caractère * répété $length fois */
    $stars = str_repeat('*',$length);
    /* on fait boucler entre 1 et $length pour créer '$length' lignes qui contiendront chacune $stars */
    for ($i=1; $i <= $length; $i++) {
        echo PHP_EOL;
        echo $stars;
    }
}
/* on test la valeur 2 */
echo square(2);
echo PHP_EOL;
?>