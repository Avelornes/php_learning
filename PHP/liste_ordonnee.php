<?php

$phrase = readline("Votre phrase : \n");
$caractere = strlen($phrase);
echo ("Resultat :" . $caractere . " \n");

for ($i=0; $i<=$caractere; $i++){
    echo $phrase[$i];
}

?>