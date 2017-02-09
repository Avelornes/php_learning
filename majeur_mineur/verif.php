<?php

$annee = 2017;

function verif($annee, $chiffre)
{
    $result = $annee - $_GET['sel1'];
    if ($result > $_GET['sel2']) {
        return "Vous êtes majeur";
    } else {
        return "Vous êtes mineur";
    }
}

verif($annee, $_GET['sel1']);
header('Location: index.php?result=' . verif($annee, $_GET['sel1']));

?>