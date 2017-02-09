<?php

function verification($nombre){
    if ($nombre != is_numeric($nombre)) {
        return "Entrez un chiffre";
    }
    elseif ($nombre % 2 == 0) {
        return $nombre . " est pair\n";
    } else {
        return $nombre . " est impair\n";
    }
}
for ($i = 0; $i < 5; $i++) {
    $nombre = readline("Votre chiffre : \n");

}
?>