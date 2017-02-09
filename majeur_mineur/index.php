<!DOCTYPE html>
<html>
<?php include('../HTML-PHP/head.php') ?>
<body>
<header>
    <?php include('../HTML-PHP/navbar.php') ?>
    <title>Majeur/Mineur</title>
</header>
<section>
    <div class="jumbotron">
        <div class="container">
            <h1>Majeur/Mineur</h1>
            <p><a class="btn btn-warning btn-lg" href="http://phpstorm.localhost/php_mos/HTML-PHP/"
                  role="button">Retour</a></p>
        </div>
    </div>
</section>
<article>
    <form action="/php_mos/majeur_mineur/verif.php" method="get">
        <div class="form-group">
            <label for="sel1">Sélectionnez l'année</label>
            <select class="form-control" name="sel1">
                <?php
                for ($i = 1900; $i <= 2017; $i++) {
                echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="sel1">Sélectionnez l'âge</label>
            <select class="form-control" name="sel2">
                <?php
                for ($i = 16; $i <= 99; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-default">Envoyer</button>
    </form>
    <p>
        <?php
        if(isset($_GET['result'])){
            echo $_GET['result']. "<br>";
        }

        ?>
    </p>
</article>
<footer>
    <?php include('../HTML-PHP/footer.php') ?>
</footer>
<script src="../HTML-PHP/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>

