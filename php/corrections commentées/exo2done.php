<?php

echo "EXERCICE 2";
echo PHP_EOL;

/* on crée la fonction*/
function emptySquare($length) {
    /* on attribue à la variable $stars le caractère * répété plusieurs fois, en fonction de l'argument que l'on teste*/
    $stars = str_repeat('*',$length);
    /* on fait une boucle qui va créer un nombre de lignes égal à l'argument */
    for ($i=0; $i < $length; $i++) {
        /* on crée une condition pour déterminer ce qui sera affiché dans chaque ligne */
        /* à la 1ère et à la dernière ligne, on affiche le caractère * $length fois */
        if ($i == 1 OR $i == $length) {
            echo PHP_EOL;
            echo $stars;
        }
        /* dans les lignes intermédiaires, on affiche une concaténation */
        /* $empty est le nombre d'espaces que nous affichons entre les caractères * de début et fin de ligne */
        else {
            $empty = str_repeat(' ',$length-2);
            echo PHP_EOL;
            echo '*' . $empty . '*';
        }
    }
}

/* on teste la valeur 4 */
echo emptySquare(4);
echo PHP_EOL;

?>