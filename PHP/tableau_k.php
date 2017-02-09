<?php

$user = array(
    array(
        'Prenom : ' => 'Séverine',
        'Nom : ' => 'Noël',
        'Age : ' => '23 ans',
        'Ville : ' => 'Granville'),

    array(
        'Prenom : ' => 'Pauline',
        'Nom : ' => 'Vidinic',
        'Age : ' => '37 ans',
        'Ville : ' => 'St Pair'),

    array(
        'Prenom : ' => 'Julien',
        'Nom : ' => 'Kabeche',
        'Age : ' => '31 ans',
        'Ville : ' => 'Granville'),

    array(
        'Prenom : ' => 'Wendy',
        'Nom : ' => 'Piot',
        'Age : ' => '25 ans',
        'Ville : ' => 'Granville'),
);

foreach ($user as $cle1 => $valeur1) {
    echo "Bulot n° : " . $cle1 . "<br />\n";
    foreach ($valeur1 as $cle2 => $valeur2) {
        echo $cle2 . $valeur2 . "<br />\n";
    }
}

?>