<?php

/*echo "1 play\n";
echo "2 quitter \n";

$jeu = readline("Menu : ");

switch ($jeu) {
    case 1:
        echo "play\n";
        for($i=0 ; $i<5; $i++){
            $resultat = rand(1, 2);
            echo $resultat."\n";
            $choix = readline("un ou deux ? \n");
        }
        break;
    case 2:
        echo "Au revoir\n";
        break;
}*/

a : echo "1) Jouer\n";
echo "2) Quitter\n";

$choix = readline("Jouer ou quitter ? ");
if ($choix==1){
    $resultat = rand(3, 4);
    echo $resultat."\n";
}

elseif ($choix==2){
    echo "Au revoir\n";
}

else{
    echo "Je n'ai pas compris, recommence\n";
    goto a;
}

?>