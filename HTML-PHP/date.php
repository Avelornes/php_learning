<!DOCTYPE html>
<html>
<?php include('head.php') ?>
<title>Date et heure</title>
<body>
<header>
    <?php include('navbar.php') ?>
</header>
<section>
    <div class="jumbotron">
        <div class="container">
            <h1>Date et heure</h1>
            <p><a class="btn btn-warning btn-lg" href="http://phpstorm.localhost/php_mos/HTML-PHP/" role="button">Retour</a></p>
        </div>
    </div>
</section>
<article>
    <h1>Afficher la date et l'heure</h1>
    <?php

    echo date('l jS \of F Y h:i:s A');

    ?>
</article>
<?php include('footer.php') ?>
</body>
</html>



