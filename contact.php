<!doctype html>
<html lang="en">
<head>
    <?php include("./components/head.php"); ?>
    <title>contact </title>
</head>
<body>
<?php include("./components/header.php"); ?>
<main>
    <h1 class=" title text-xlarge text-center">Accès<span class="text-primary"> / </span>contact</h1>
    <div class="map-contact">
        <iframe class="map" src="https://www.google.com/maps/d/u/0/embed?mid=132QM7sT7xyebBz9Wpwo27hf6d3o9Espt" width="640" height="480"></iframe>

        <section class="contact">
            <h2>Adresse</h2>
            <adress class="adress">71 rue de Béthune<br>59100 Lille</adress>
            <h2>Métro</h2>
            <p>Station Rihour</p>
            <h2>Parking</h2>
            <p>Parking Effia Nouveau Siècle</p>
            <h2>type de restaurant</h2>
            <p>Pizzeria, Restaurant Italien, Sur place, Vente à Emporte</p>
            <h2>Services</h2>
            <p>Terrasse, Wifi, Pizza à emporter, Restaurant sur place ou à emporter , Privatisation possible</p>
            <h2>Moyens de paiement</h2>
            <p>Carte Bleue, Chèques, Chèques Vacances, Espèces, Eurocard/Mastercard, Titres restaurant, Visa</p>
        </section>
    </div>
    <section class="title">
        <h1 class="text-xlarge text-center">Vous désirez nous<span class="text-primary"> contacter ?</span> Remplissez le formulaire ci dessous</h1>
    </section>
    <div class="form-group">
        <form class="contact-mail form-group" action="https://formspree.io/mdowjnre" method="POST">
            <div class="form-group form">
                <label for="name_field" id="name_field" name="name">Votre nom</label>
                <input type="text" class="name_field" name="name_field">
            </div>
            <div class="form-group form">
                <label for="_replyto">Votre email</label>
                <input type="email" class="_replyto" name="_replyto" >
            </div>
            <div class="form-group form">
                <label  for="textarea_message">Votre message ou demande de réservation</label>
                <textarea class="textarea_message" name="textarea_message"></textarea>
            </div>
            <div class="form-group ">
                <button type="submit" class="button button-hollow">envoyer votre message </button>
            </div>
        </form>
    </div>
</main>

<?php include("./components/footer.php"); ?>
</body>
</html>
