<?php

$loterie = $_POST['name'];
$noms = explode(" ", $loterie);
$rand_loterie = array_rand($noms);

?>

<!DOCTYPE html>
<html>
<?php include('head.php') ?>
<body>
<header>
    <?php include('navbar.php') ?>
    <title>Loterie</title>
</header>
<section>
    <div class="jumbotron">
        <div class="container">
            <h1>Loterie</h1>
            <p><a class="btn btn-warning btn-lg" href="http://phpstorm.localhost/php_mos/HTML-PHP/"
                  role="button">Retour</a></p>
        </div>
    </div>
</section>
<article>
    <div class="container">
        <form action="loterie.php" method="post">
            <div class="form-group">
                <label for="textarea">La loterie</label>
                <input type="textarea" class="form-control" name="name" placeholder="Insérez les noms">
            </div>
            <button type="submit" class="btn btn-default">Envoyer</button>
        </form>
        <h1>
            <?php

            echo $noms[$rand_loterie] . "\n";

            ?>
        </h1>
    </div>
</article>
<footer>
    <?php include('footer.php') ?>
</footer>
</body>
</html>

