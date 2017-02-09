<?php

$mos = "MancheOpenSchool";

?>
<!DOCTYPE html>
<html>
<?php include('head.php') ?>
<body>
<header>
    <?php include('navbar.php') ?>
    <title>MOS</title>
</header>
<section>
    <div class="jumbotron">
        <div class="container">
            <h1>MOS</h1>
            <p></p>
            <p><a class="btn btn-warning btn-lg" href="http://phpstorm.localhost/php_mos/HTML-PHP/"
                  role="button">Retour</a></p>
        </div>
    </div>
</section>
<article>
    <?php
    for ($i=0; $i<strlen($mos); $i++){
    if ($i % 2 == 0){
        echo "<h1 class='text-danger'>$mos[$i]</h1>";
    }

    else{
        echo "<h1 class='text-primary'>$mos[$i]</h1>";
    }
    }
    ?>
</article>
<footer>
    <?php include('footer.php') ?>
</footer>
</body>
</html>