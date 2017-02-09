<?php

$joueurs = readline("Les joueurs : \n");
$noms = explode(",", $joueurs);
$random = rand(0,sizeof($noms)-1);
echo $noms[$random]."\n";

?>