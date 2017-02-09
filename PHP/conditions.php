<?php

$age = readline("Votre âge : ");

if ($age >= 18){

    echo 'Tu as '. $age .' ans, bienvenue !';
    $autorisationEntrer = 'Oui';

} else {

    echo 'Tu as ' . $age .' ans, tu ne peux pas rentrer.';
    $autorisationEntrer = 'Non';

}

echo 'Avez-vous l\'autorisation d\'entrer ? La réponse est : '. $autorisationEntrer .'.';

?>