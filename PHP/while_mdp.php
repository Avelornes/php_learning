<?php

$user = "toto";
$password = 123456;
$nbr_essais = 3;


while ($nbr_essais == TRUE){
    echo "il vous reste $nbr_essais essais \n";
    $userd = readline("Nom utilisateur : \n");
    $passwordd = readline("Mot de passe: \n");

    if ($userd!=$user AND $passwordd!=$password) {
        echo "Recommence\n";
    }

    else{
        echo "Bienvenue\n";
        break;
    }
    $nbr_essais--;

    if($nbr_essais == FALSE) {
        echo "Vous avez fait trop de tentatives\n";
    }

}
?>