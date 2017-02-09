
<?php

$loterie = readline("insérez les noms : \n");
$noms = explode(" ", $loterie);
$rand_loterie = array_rand($noms);
echo $noms[$rand_loterie] . "\n";

?>

