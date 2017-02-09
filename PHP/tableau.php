<?php

$array = array(10,20,30,40,50);
array_unshift($array,0);
array_push($array,60);
unset($array[3]);
print_r($array)

?>