<!DOCTYPE html>
<html>
<?php include('../HTML-PHP/head.php') ?>
<body>
<header>
    <?php include('../HTML-PHP/navbar.php') ?>
    <title>Resultat temperature</title>
</header>
<section>
    <div class="jumbotron">
        <div class="container">
            <h1>Resultat température</h1>
            <p><a class="btn btn-warning btn-lg" href="http://phpstorm.localhost/php_mos/HTML-PHP/"
                  role="button">Retour</a></p>
        </div>
    </div>
</section>
<article>
    <p>Il fait <?php echo $_GET['temp']; ?>°.</p>
    <?php
    if ($_GET['temp'] <=10){
        echo "Et il fait froid";
    }
    elseif ($_GET['temp'] <=20){
        echo "Et la température est normale";
    }
    else{
        echo "Il fait trop chaud";
    }
    ?>
</article>
<footer>
    <?php include('../HTML-PHP/footer.php') ?>
</footer>
</body>
</html>


