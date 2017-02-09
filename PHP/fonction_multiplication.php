<?php


function multiplication($nbr1,$nbr2){
    $resultat = ($nbr1 * $nbr2);
    return $resultat;
}

$nbr1 = readline("Entrez le premier chiffre : \n");
$nbr2 = readline("Entrez le deuxième chiffre : \n");
echo multiplication($nbr1, $nbr2) ."\n";

?>