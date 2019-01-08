<?php

echo "EXERCICE 3";
echo PHP_EOL;

/* on crée la fonction*/
 function rectangle($width, $length) {
    /* on attribue à la variable $stars le caractère * répété '$width' fois, en fonction de l'argument que l'on teste*/
    $stars = str_repeat('*',$width);
    /* on fait une boucle qui va créer un nombre de lignes égal à l'argument '$length' */
    for ($i=1; $i <= $length; $i++) {
        /* on crée une condition pour déterminer ce qui sera affiché dans chaque ligne */
        /* à la 1ère et à la dernière ligne, on affiche le caractère * '$length' fois */
        if ($i == 1 OR $i == $length) {
            echo PHP_EOL;
            echo $stars;
        }
        /* dans les lignes intermédiaires, on affiche une concaténation */
        /* $empty est le nombre d'espaces que nous affichons entre les caractères * de début et fin de ligne */
        else {
            $empty = str_repeat(' ',$width-2);
            echo PHP_EOL;
            echo '*' . $empty . '*';
        }
    }
}


/* Remplacez x et y par ce que vous souhaitez tester */
echo rectangle(4,9);
echo PHP_EOL;
?>