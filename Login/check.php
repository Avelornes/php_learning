<?php

$identifiant = "mail@gmail.com";
$password = 123456;

if (isset($_POST['login']) && isset($_POST['password'])) {
    if ($identifiant == $_POST['login'] && $password == $_POST['password']) {
        header('Location: dashboard.php');
    }
    else {
        header('Location: error.php');
    }
}
?>