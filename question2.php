<?php
     //factorielle avec boucle for
$nombre = 4;
$fact = 1;

for ($i = 1; $i <= $nombre; $i++) {
    $fact = $fact * $i;
}
echo ("La factoriel de $nombre est $fact avec la boucle for");


     // factorielle avec boucle while
$numero = 4;
$fact = 1;

     while ($numero > 0) {
        $fact = $fact * $numero;
        $numero--;
    }
echo ("<br>");
echo ("La factoriel est $fact avec la boucle while");

?>