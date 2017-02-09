<?php

$user = array(
    1 => array(
        'Prénom : ' => 'Julien',
        'Nom : ' => 'Gandanger',
        'Âge : ' => 25),

    2 => array(
        'Prénom : ' => 'Julien',
        'Nom : ' => 'Clouet',
        'Âge : ' => 25),

    3 => array(
        'Prénom : ' => 'Julien',
        'Nom : ' => 'Foison',
        'Âge : ' => 25),
)

?>


<!DOCTYPE html>
<html>
<?php include('head.php') ?>
<body>
<header>
    <?php include('navbar.php') ?>
    <title>Tableau 2</title>
</header>
<section>
    <div class="jumbotron">
        <div class="container">
            <h1>Les tableaux 2</h1>
            <p><a class="btn btn-warning btn-lg" href="http://phpstorm.localhost/php_mos/HTML-PHP/"
                  role="button">Retour</a></p>
        </div>
    </div>
</section>
<article>
    <?php
    foreach ($user as $cle1 => $valeur1) {
        echo "Bulot n° : " . $cle1 . "<br />\n";
        foreach ($valeur1 as $cle2 => $valeur2) {
            echo $cle2 . $valeur2 . "<br />\n";
        }
    }
    ?>
</article>
<footer>
    <?php include('footer.php') ?>
</footer>
</body>
</html>
