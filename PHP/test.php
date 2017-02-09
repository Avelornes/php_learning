<?php //début de code

$prenom = "Severine\n"; //variable prénom
$nom = "Noël\n"; //variable nom
$nom = mb_strtoupper($nom, 'UTF-8'); //nom + accents du nom en majuscule
/*$age = "23 ans"; //variable âge */

echo "Votre prénom : " . $prenom; //affiche prénom
echo "Votre nom : " . $nom; //affiche nom
echo readline("Votre âge : "); //l'user ajoute son âge

//fin de code ?>


