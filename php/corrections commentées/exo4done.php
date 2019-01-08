<?php

echo "EXERCICE 4";
echo PHP_EOL;
echo PHP_EOL;
 /* On déclare le tableau qui liste les prénoms */
$prenoms = [
    'Jean-Pierre',
    'Thérèse',
    'Pascal',
    'Stéphane',
    'Patrick',
    'Roger',
    'Raymonde'
];
echo PHP_EOL;
/* on affiche les infos du tableau prénom, pour tester les valeurs */
echo 'Type et valeurs des données contenues dans le tableau :';
var_dump($prenoms);
echo PHP_EOL;
/* on déclare notre fonction */
echo 'La liste de prénoms séparés par un espace :';
echo PHP_EOL;
function display($firstnamesList) {
    /* on indique à la fonction de boucler pour chaque valeur d'un tableau nommé '$firstnamesList' dont chaque clé sera '$currentFirstname' */
    foreach ($firstnamesList as $currentFirstname) {
        /* on demande d'afficher, à chaque tour de boucle, le prénom concaténé à un espace */
        echo $currentFirstname . ' ';
    }
}

/* On affiche la fonction en appelant le tableau comme argument */
echo display($prenoms);
echo PHP_EOL;
?>