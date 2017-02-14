<?php

$bdd = new PDO('mysql:host=localhost; dbname=manche_open_school; charset=utf8', 'root', '*****');

$prenom = readline("Votre prénom : \n");
$nom = readline("Votre nom : \n");
$phone = readline("phone : \n");
$email = readline("Votre email : \n");
$password = readline("Votre pwd : \n");

$bdd->exec("INSERT INTO utilisateurs (prenom, nom, phone, email, password) VALUES('$prenom','$nom','$phone','$email','$password')");

echo "salut $prenom \n";
?>

