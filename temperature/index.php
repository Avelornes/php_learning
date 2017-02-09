<!DOCTYPE html>
<html>
<?php include('../HTML-PHP/head.php') ?>
<body>
<header>
    <?php include('../HTML-PHP/navbar.php') ?>
    <title>Température</title>
</header>
<section>
    <div class="jumbotron">
        <div class="container">
            <h1>Température</h1>
            <p><a class="btn btn-warning btn-lg" href="http://phpstorm.localhost/php_mos/HTML-PHP/"
                  role="button">Retour</a></p>
        </div>
    </div>
</section>
<article>
    <div class="container">
        <h2>Température</h2>
        <form action="/php_mos/temperature/resultat.php" method="get">
            <div class="form-group">
                <label for="textarea">Température</label>
                <input type="textarea" class="form-control" name="temp" placeholder="Entrez la température">
            </div>
            <button type="submit" class="btn btn-default">Envoyer</button>
        </form>
    </div>
</article>
<footer>
    <?php include('../HTML-PHP/footer.php') ?>
</footer>
</body>
</html>