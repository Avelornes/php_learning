<?php

session_start();

if ($_POST['choix'] < $_SESSION['random']) {
    echo "Ton chiffre est trop petit";
    $_SESSION['vies']--;
    header('Location: jeu.php?resultat=plus');
}
elseif($_POST['choix'] > $_SESSION['random']){
    echo "Ton chiffre est trop grand";
    $_SESSION['vies']--;
    header('Location: jeu.php?resultat=moins');
}
else{
    echo "Félicitations, tu as gagné !";
    header('Location: jeu.php?resultat=gagne');

}
?>