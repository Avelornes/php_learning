<?php
$array = array("Julien_C", "Julien_ K", "Julien_ G", "Julien_ F", "Jérémy", "Justine", "Guillaume", "Damien", "Frédéric", "Séverine", "Wendy", "Pauline");
?>

<!DOCTYPE html>
<html>
<?php include('head.php') ?>
<body>
<header>
    <?php include('navbar.php') ?>
    <title>Tableaux</title>
</header>
<section>
    <div class="jumbotron">
        <div class="container">
            <h1>Les tableaux</h1>
            <p><a class="btn btn-warning btn-lg" href="http://phpstorm.localhost/php_mos/HTML-PHP/"
                  role="button">Retour</a></p>
        </div>
    </div>
</section>
<article>
    <h1>Les bulots :</h1>
    <?php
    for ($i=0; $i<sizeof($array); $i++){
        echo "<ul><li>$array[$i]</li></ul>";
    }
    ?>
</article>
<footer>
    <?php include('footer.php') ?>
</footer>
</body>
</html>

