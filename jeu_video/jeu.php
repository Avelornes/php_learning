<?php
session_start();
?>

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
    <p>Il te reste <?php echo $_SESSION['vies'] ?> vies</p>
    <p>Tu dois choisir un chiffre entre <?php echo $_SESSION['moins'] ?> et <?php echo $_SESSION['plus'] ?></p>
    <?php
    if(isset ($_GET['resultat'])){
        echo "<h1> C'est ".$_GET['resultat']."</h1>";
    }
    ?>
    <div class="container">
        <form action="/php_mos/jeu_video/check.php" method="post">
            <div class="form-group">
                <label for="number">Choisir un chiffre</label>
                <input type="number" class="form-control" name="choix" placeholder="Chiffre choisi">
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

