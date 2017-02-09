<?php

function afficherMenu()
{
    echo "1) addition";
    echo "2) soustraction";
    echo "3) multiplication";
    echo "4) division";
}

function addition($a, $b){
    $resultat=($a + $b);
    return $resultat;
}

function soustraction($a, $b){
    $resultat=($a - $b);
    return $resultat;
}

function multiplication($a, $b){
    $resultat=($a * $b);
    return $resultat;
}

function division($a, $b){
    $resultat=($a / $b);
    return $resultat;
}

$choix = readline("choisir menu : ");

switch ($choix) {
    case 1:
        echo "addition\n";
        $a = readline("1er chiffre \n");
        $b = readline("2èchiffre \n");
        echo addition ($a, $b) ." \n";
        break;

    case 2:
        echo "soustraction\n";
        $a = readline("1er chiffre \n");
        $b = readline("2èchiffre \n");
        echo soustraction ($a, $b) ." \n";
        break;
    case 3:
        echo "multiplication\n";
        $a = readline("1er chiffre \n");
        $b = readline("2èchiffre \n");
        echo multiplication($a, $b) ." \n";
        break;
    case 4:
        echo "division\n";
        $a = readline("1er chiffre \n");
        $b = readline("2èchiffre \n");
        echo division($a, $b) ." \n";
        break;
}

?>