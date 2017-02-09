<!DOCTYPE html>
<html>
<?php include('head.php') ?>
<body>
<header>
    <?php include('navbar.php') ?>
    <title>GET</title>
</header>
<section>
    <div class="jumbotron">
        <div class="container">
            <h1>_GET</h1>
            <p></p>
            <p><a class="btn btn-warning btn-lg" href="http://phpstorm.localhost/php_mos/HTML-PHP/"
                  role="button">Retour</a></p>
        </div>
    </div>
</section>
<article>
    <p>
        <?php

        if (isset($_GET['prenom']) AND isset($_GET['nom'])){
            echo 'Bonjour ' . $_GET['prenom']. ' ' . $_GET['nom'] . ' !';
        }

        else{
            echo 'Bonjour inconnu';
        }

        ?>
    </p>
</article>
<footer>
    <?php include('footer.php') ?>
</footer>
</body>
</html>