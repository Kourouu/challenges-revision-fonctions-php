<?php

echo "EXERCICE 5";
echo PHP_EOL;
 /* Votre code ici */

 $terms = [
     '1',
     '13',
     '24',
     '2',
     '-7'
 ];

function sum($termes) {
    /* on initialise la somme à 0 */
    $somme = 0;
    /* on fait boucler pour chaque élément du tableau */
    foreach ($termes as $currentTerme) {
        /* à chaque tour de boucle, on ajoute le terme actuel à la somme */
        $somme = $somme + $currentTerme;
    }
    return $somme;

}

/* on affiche le résultat de la fonction en appelant le tableau en argument */
echo 'La somme des termes du tableau vaut :' . PHP_EOL;
echo sum($terms);
echo PHP_EOL;
?>