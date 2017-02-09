<?php

$wakeup = readline("Heure du réveil ? \n");
$heure = date("H:i");

while($wakeup != $heure ){
    if ($wakeup == $heure){
    echo "Debout !";
}
}

?>