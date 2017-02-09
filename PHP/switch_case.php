<?php

echo "1 play\n";
echo "2 paramètres\n";
echo "3 quitter \n";

$jeu = readline("Menu : ");

switch ($jeu) {
    case 1:
        echo "play\n";
        break;
    case 2:
        echo "paramètres\n";
        break;
    case 3:
        echo "quitter\n";
        break;
}

?>