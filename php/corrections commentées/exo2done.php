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
        if ($i == 0 OR $i == $length-1) {
            echo PHP_EOL;
            echo $stars;
        }
        /* dans les lignes intermédiaires, on affiche une concaténation */
        else {
/* en contrôlant que s'affiche une chaîne de caractère contenant un seul caractère si l'argument est 1 */
            if ($length == 1) {
                echo '*';
            }
            else {
/* $empty est le nombre d'espaces que nous affichons entre les caractères * de début et fin de ligne */
/* le if de la ligne 21 permet de s'assurer que $empty n'est pas négatif */
            $empty = str_repeat(' ',$length-2);
            echo PHP_EOL;
            echo '*' . $empty . '*';
            }
        }
    }
}
/* on teste la valeur 34 */
echo emptySquare(34);
echo PHP_EOL;

?>