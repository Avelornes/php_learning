<!DOCTYPE html>
<html>
<?php include('../HTML-PHP/head.php') ?>
<body>
<header>
    <?php include('../HTML-PHP/navbar.php') ?>
    <title>Jeu !</title>
</header>
<section>
    <div class="jumbotron">
        <div class="container">
            <h1>Jeu</h1>
            <p><a class="btn btn-warning btn-lg" href="http://phpstorm.localhost/php_mos/HTML-PHP/"
                  role="button">Retour</a></p>
        </div>
    </div>
</section>
<article>
    <div class="container">
        <form action="/php_mos/jeu_video/session.php" method="post">
            <div class="form-group">
                <label for="number">Plus petit chiffre</label>
                <input type="number" class="form-control" name="moins" placeholder="Petit chiffre">
            </div>
            <div class="form-group">
                <label for="number">Plus grand chiffre</label>
                <input type="number" class="form-control" name="plus" placeholder="Grand chiffre">
            </div>
            <div class="form-group">
                <label for="number">Nombre de vies restantes</label>
                <input type="number" class="form-control" name="vies" placeholder="Vies">
            </div>
            <button type="submit" class="btn btn-default">Jouer !</button>
        </form>
    </div>
</article>
<footer>
    <?php include('../HTML-PHP/footer.php') ?>
</footer>
</body>
</html>