<!DOCTYPE html>
<html>
<?php include('head.php') ?>
<body>
<header>
    <?php include('navbar.php') ?>
    <title>API</title>
</header>
<section>
    <div class="jumbotron">
        <div class="container">
            <h1>API</h1>
            <p>La météo à Granville en direct</p>
            <p><a class="btn btn-warning btn-lg" href="http://phpstorm.localhost/php_mos/HTML-PHP/"
                  role="button">Retour</a></p>
        </div>
    </div>
</section>
<article>
    <?php
    $current = file_get_contents("http://api.openweathermap.org/data/2.5/forecast/city?id=3014867&APPID=5a0f5161515f0a6b0bf89db40ab1e01b");
    var_dump(json_decode($current)->list[0]->main);
    echo "blabla";

    ?>
</article>
<footer>
    <?php include('footer.php') ?>
</footer>
</body>
</html>

