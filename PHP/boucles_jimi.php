<?php
$anneesCoupe = 2018; //la coupe commence en 2018
for ($i=1 ; $i<=8 ; $i++) { //on veut afficher les 8 prochaines
    echo $anneesCoupe." ";
    $anneesCoupe = $anneesCoupe+4; //resultat=2018+4
}

?>