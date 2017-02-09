<?php

function verification($age)
{
    if ($age % 2 == 0) {
        return "<p class='pair'> $age est pair</p>";
    } else {
        return "<p class='impair'> $age est impair</p>";
    }
}

function majeurmineur($age)
{
    if ($age >= 21) {
        echo "Tu es majeur partout";
    } elseif ($age >= 18 && $age < 21) {
        echo "Tu es majeur en France mais mineur aux USA";
    } else {
        echo "Tu es mineur";
    }
}

?>

<!DOCTYPE html>
<html>
<?php include('head.php') ?>
<title>Conditions</title>
<body>
<header>
    <?php include('navbar.php') ?>
</header>

<section>
    <div class="jumbotron">
        <div class="container">
            <h1>Conditions</h1>
            <p><a class="btn btn-warning btn-lg" href="http://phpstorm.localhost/php_mos/HTML-PHP/" role="button">Retour</a></p>
        </div>
    </div>
</section>
<article>
    <h1>Mineur ou majeur ?</h1>
    <?php
    echo majeurmineur(19);
    ?>
    <h1>Pair ou impair ?</h1>
    <?php
    echo verification(19);
    ?>
</article>
<?php include('footer.php') ?>
</body>
</html>



