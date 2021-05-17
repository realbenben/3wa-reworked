<!--LE TEMPLATE DE DEPART DU SITE/TEMPLATE BASE FROM THE WEBSITE-->

<!doctype html>
<html lang="fr">
  <head>
    <?php include("./components/head.php"); ?>
    <title>Pizza à emporter </title>
  </head>
  <body>

    <?php include("./components/header.php"); ?>
    <main class="container">
      <div class="row content-index">
        <div class="col ">
          <h1 class="text-xlarge section"><span class="text-primary">chez Pizza Mamma</span>, le gout et la convivialité sont nos priorités!</h1>
          <p> Venez déguster nos pizzas préparées avec soin par un vrai chef italien</p>

          <div class="row">
            <div class="col">
              <a href="card.php" class="button">Menu</a>
            </div>
            <div class="col">
              <a href="contact.php" class="button button-hollow">contact</a>
            </div>
          </div>
        </div>
        <div class="col">
          <img src="assets/images/welcome-pizza.jpg" alt="pizza Mamma chef pizza"></img>
        </div>
      </div>
    </main>
    <div class="section section-pink">
      <div class="container team">
        <h2 class="text-xlarge">Rencontrez la team</h2>
        <?php include("components/team.php"); ?>
      </div>
    </div>
    <?php include("./components/footer.php"); ?>
  </body>
</html>
