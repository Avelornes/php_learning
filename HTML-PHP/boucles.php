<!DOCTYPE html>
<html>
<?php include('head.php') ?>
<body>
<header>
    <?php include('navbar.php') ?>
    <title>Boucles</title>
</header>
<section>
    <div class="jumbotron">
        <div class="container">
            <h1>Les boucles</h1>
            <p><a class="btn btn-warning btn-lg" href="http://phpstorm.localhost/php_mos/HTML-PHP/" role="button">Retour</a></p>
        </div>
    </div>
</section>
<article>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<h1>$i</h1>";
    }
    ?>
</article>
<footer>
    <?php include('footer.php') ?>
</footer>
</body>
</html>