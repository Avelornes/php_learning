<!DOCTYPE html>
<html>
<?php include('head.php') ?>
<body>
<header>
    <?php include('navbar.php') ?>
    <title>Get & Switch</title>
</header>
<section>
    <div class="jumbotron">
        <div class="container">
            <h1>Get & Switch</h1>
            <p><a class="btn btn-warning btn-lg" href="http://phpstorm.localhost/php_mos/HTML-PHP/"
                  role="button">Retour</a></p>
        </div>
    </div>
</section>
<article>
    <?php
    if (isset($_GET['langue'])) {

        switch ($_GET['langue']) {
            case "fr":
                echo "Bonjour";
                break;
            case "en":
                echo "Hello";
                break;
            case "de":
                echo "Gütentag";
                break;
            default :
                echo "Je ne comprends pas";
        }
    }
    else{
        echo "Je ne peux pas afficher de langue particulière";
    }
    ?>
</article>
<footer>
    <?php include('footer.php') ?>
</footer>
</body>
</html>