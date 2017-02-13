<?php
session_start();

$plus = $_POST['plus'];
$moins = $_POST['moins'];
$vies = $_POST ['vies'];

$_SESSION['plus'] = $plus;
$_SESSION['moins'] = $moins;
$_SESSION['vies'] = $vies;
$_SESSION['random'] = rand($_POST['moins'], $_POST['plus']);

header('Location: jeu.php')

?>