<?php

echo "EXERCICE 1";
echo PHP_EOL;
 /* Votre code ici */

function square($length) {
    $stars = str_repeat('*',$length);
    for ($i=1; $i <= $length; $i++) {
        echo PHP_EOL;
        echo $stars;
    }
}
echo square(3);
echo PHP_EOL;
?>