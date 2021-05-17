<!doctype html>
<html lang="en">
<head>
    <?php include("./components/head.php"); ?>
    <title>Menu du restaurant</title>
</head>
<body>
<?php include("./components/header.php"); ?>
<?php include("./components/ArrayMenu.php"); ?>
<main class="container">
    <div class="animation-title">
        <img class="svg" src="assets/images/menu/pizz-svg.png"alt="pizza svg"></img>
        <h1 class="carte"> La carte </h1>
    </div>
    <div class="flex-card">
        <div class="food">
            <div class="animation ">
                <h2>Les Pizze</h2>
                <h3> Les bases rouges : sauce tomate et mozzarella Fior di latte </h3>
                <ul class ="menu">
                    <?php
                    foreach ($pizzaRedBase as $pizza) {
                        ?>
                        <li><?= $pizza['title'] ?> : <?= $pizza['price'] ?> €</li>';
                        <li><em class="italic"><?= $pizza['ingredients'] ?></em></li>';
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="animation">
                <h3>Les bases blanches : creme de parmesan et mozzarella Fior di latte</h3>
                <ul class="menu">
                    <?php
                    foreach ($pizzaGreenBase as $pizza) {
                        ?>
                        <li><?= $pizza['title'] ?> : <?= $pizza['price'] ?> €</li>';
                        <li><em class="italic"><?= $pizza['ingredients'] ?></em></li>';
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="animation">
                <h3>Les bases vertes : pesto et mozzarella fior di latte</h3>
                <ul class="menu">
                    <?php
                    foreach ($pizzaWhiteBase as $pizza) {
                        ?>
                        <li><?= $pizza['title'] ?> : <?= $pizza['price'] ?> €</li>';
                        <li><em class="italic"><?= $pizza['ingredients'] ?></em></li>';
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="animation">
                <h2>Les Desserts</h2>
                <ul class="menu">
                    <?php
                    foreach ($desserts as $dessert) {
                        ?>
                        <li><?= $dessert['title'] ?> :  <?= $dessert['price'] ?> €</li>';
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="drink">
            <div class="animation">
                <h2>cocktails</h2>
                <ul class="boissons">
                    <?php
                    foreach ($coktails as $coktail) {
                        ?>
                        <li><?= $coktail['title'] ?> :  <?= $coktail['price'] ?> €</li>';
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="animation">
                <h2>Les apéritifs</h2>
                <ul class="boissons">
                    <?php
                    foreach ($aperitifs as $aperitif) {
                        ?>
                        <li><?= $aperitif['title'] ?> :  <?= $aperitif['price'] ?> € / <?= $aperitif['quantity'] ?>cl</li>';
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="animation">
                <h2>les bières</h2>
                <ul class="boissons">
                    <?php
                    foreach ($beers as $beer) {
                        ?>
                        <li><?= $beer['title'] ?> :  <?= $beer['price'] ?> € / <?= $beer['quantity'] ?>cl</li>';
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="animation">
                <h2>Les softs</h2>
                <ul class="boissons">
                    <?php
                    foreach ($softs as $soft) {
                        ?>
                        <li><?= $soft['title'] ?> :  <?= $soft['price'] ?> € / <?= $soft['quantity'] ?>cl</li>';
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="animation">
                <h2>Les eaux</h2>
                <ul class="boissons">
                    <?php
                    foreach ($waters as $water) {
                        ?>
                        <li><?= $water['title'] ?> :  <?= $water['price'] ?> € / <?= $water['quantity'] ?>cl</li>';
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="animation">
                <h2>Les Boissons Chaudes</h2>
                <ul class="boissons">
                    <?php
                    foreach ($hotDrinks as $drink) {?>
                        <li><?= $drink['title'] ?> :  <?= $drink['price'] ?> €</li>';
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="section section-pink">
        <div class="container">
            <h2 class="text-xlarge">Rencontrez la team</h2>
            <?php include("./components/team.php"); ?>
        </div>
    </div>
    <?php include("./components/footer.php"); ?>
</body>
</html>