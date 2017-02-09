<?php

$age = readline("Votre âge ? ");

function age($age){

    if ($age>=18){
        return ("majeur");
    }

    else{
        return ("mineur");
    }
}

echo age($age);

?>