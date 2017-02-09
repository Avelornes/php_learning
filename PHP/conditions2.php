<?php

$temp = readline ("Votre température : \n");

if ($temp <0){
    echo "il fait très froid\n";
}
elseif ($temp <=10){
    echo "il fait froid\n";
}
elseif ($temp <=20 ){
    echo "Température normale\n";
}
elseif ($temp <=30){
    echo "Il fait chaud\n";
}
else{
    echo "Il fait trop chaud\n";
}
?>