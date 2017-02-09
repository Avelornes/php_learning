<?php

for ($i=0; $i<=30; $i++){
    if ($i%2==0 AND $i%5==0){
        echo $i . " est divisible par 2 et 5\n";
    }
    elseif ($i%2==0){
        echo $i . " est divisible par 2 uniquement\n";
    }
    elseif ($i%5==0){
        echo $i . " est divisible par 5 uniquement\n";
    }
    else{
        echo $i . " est indivisible par 2 ou 5\n";
    }
}

?>