<?php

$bdd = new PDO('mysql:host=localhost; dbname=manche_open_school; charset=utf8', 'root', 'etoile1');

$reponse = $bdd->query('SELECT * FROM utilisateurs');

while($donnees = $reponse->fetch()){

?>
    <?php $donnees['nom'] = strtoupper($donnees['nom']); ?>
    <?php $donnees['prenom'] = ucfirst($donnees['prenom']); ?>

    Utilisateur numéro <?php echo $donnees['ID'] . "\n"; ?>
    Son prénom est <?php echo $donnees['prenom'] . "\n"; ?>
    Son nom est <?php echo $donnees['nom'] . "\n"; ?>
    Son téléphone est <?php echo $donnees['phone'] . "\n"; ?>
    Son email est <?php echo $donnees['email'] . "\n"; ?>
    Son mot de passe est <?php echo $donnees['password'] . "\n"; ?>

<?php
}

$reponse->closeCursor();

?>