<?php

$chiffre = rand(1, 15);
b: $chiffre2 = readline("Choisissez un chiffre : \n");


if ($chiffre2 == $chiffre)
    echo "C'est bon !\n";

while($chiffre2 != $chiffre) {
if
    ($chiffre2 > $chiffre){
    echo "Trop grand ! Recommence\n";
    goto b;
    }
elseif ($chiffre2 < $chiffre) {
    echo "Trop petit ! Recommence\n";
    goto b;
}}

?>