<!doctype html>
<html lang="fr">
  <head>
    <?php include("./components/head.php"); ?>
    <title>gals</title>
  </head>
  <?php include("./components/header.php"); ?>
  <main class="container">
    <h1 class="text-xlarge text-center title">Venez découvrir nos <span class="text-primary">fabuleuses</span> créations </h1>
    <div id="gallery"></div>
    <template>
    <li>
      <img alt="gallery" loading="lazy">
    </li>
    </template>
  </main>
  <div class="section section-pink">
    <div class="container">
      <h2 class="text-xlarge">Rencontrez la team</h2>
      <?php include("./components/team.php"); ?>
    </div>
  </div>
  <?php include("./components/footer.php"); ?>
</div>
<script src="./assets/javascripts/app.js" type="module"></script>
</body>
</html>
