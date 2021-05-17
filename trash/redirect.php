<!--commande fini on redirige sur acceuil/order done , redirection to index-->
<!doctype html>
<html lang="fr">
<head>
    <?php include("./components/head.php"); ?>
    <title>Pizza à emporter </title>
</head>
<body>
<?php include("./components/header.php"); ?>
<main class="container">
    <div class="register-content">
        <div class="section text-center">
            <h1 class="text-xlarge"><span class="text-primary">Mammamia !</span>, votre commande est enregistrée</h1>
            <p><span class="text-primary"><a  href="./index.php">Cliquez ici</a></span> pour être etre redirigé sur la page d'accueil. </p>
        </div>
        <div class="section text-center">
            <img src="assets/images/redirect/pizza-pouce2.png" alt="pizza pouce vers le haut"></img>
        </div>
    </div>
</main>
<div class="section section-pink">
    <div class="container team">
        <h2 class="text-xlarge">Rencontrez la team</h2>
        <?php include("./components/team.php"); ?>
    </div>
</div>
<?php include("./components/footer.php"); ?>
</body>
</html>