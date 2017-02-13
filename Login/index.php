<?php

$identifiant = "mail@gmail.com" ;
$password = 123456;

?>

<!DOCTYPE html>
<html>
<?php include('../HTML-PHP/head.php') ?>
<body>
<header>
    <?php include('../HTML-PHP/navbar.php') ?>
    <title>Login</title>
</header>
<section>
    <div class="jumbotron">
        <div class="container">
            <h1>Login</h1>
            <p><a class="btn btn-warning btn-lg" href="http://phpstorm.localhost/php_mos/HTML-PHP/"
                  role="button">Retour</a></p>
        </div>
    </div>
</section>
<article>
    <div class="container">
        <h2>Login</h2>
        <form action="/php_mos/Login/check.php" method="post">
            <div class="form-group">
                <label for="email">Adresse mail</label>
                <input type="email" class="form-control" name="login" placeholder="Adresse mail">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" name="password" placeholder="Mot de passe">
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