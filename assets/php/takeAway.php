<?php
// call the db connection
session_start();
require 'connection.php';

$message = null ;

// this page is used to show pizza in takeway.phtml/affiche les pizza dans le template
$db = dbConnection();
$sql = $db->prepare('SELECT id, name, price
                    FROM products
                    WHERE type ="pizza"
                    ORDER BY id');

// 3. execute request/Exécuter la requête
$sql->execute();

// 4. stock result request in a variable
//Récupérer les résultats de la requête exécutée et les stocker dans une variable
$pizzas = $sql->fetchAll();

$sql = $db->prepare('SELECT id, name, price
                    FROM products
                    WHERE type ="boisson"
                    ORDER BY id');

$sql->execute();
$drinks = $sql->fetchAll();

//insertion en base de données de la commande
if (!empty($_POST['customer_id']) && !empty($_POST['foods']) && !empty($_POST['drinks'])) {
    $foodId = htmlspecialchars($_POST['foods']);
    $drinkId = htmlspecialchars($_POST['drinks']);

    //récupération des prix
    $priceSQL = 'SELECT price FROM products WHERE id= ?';
    $foodSQL = $db->prepare($priceSQL);
    $foodSQL->execute([$foodId]);
    $food = $foodSQL->fetch(PDO::FETCH_ASSOC);

    $drinkSQL = $db->prepare($priceSQL);
    $drinkSQL->execute([$drinkId]);
    $drink = $drinkSQL->fetch(PDO::FETCH_ASSOC);

    $total = $food['price'] + $drink['price'];

    //enregistrment de la commande
    $uniqId = uniqid('order_', true);
    $orderSQL = \sprintf('INSERT INTO orders (customer_id, date, order, total_price) VALUES (%s,%s,%s,%d)',
        $_POST['customer_id'],
        new \DateTime(),
        $uniqId,
        $total
    );

    $db->exec($orderSQL);
    $orderId = $db->lastInsertId();

    if($orderId) {
        $productSQL = 'INSERT INTO products_orders (product_id,order_id) VALUES (%s,%s)';

        $foodProductSQL = \sprintf($productSQL, $foodId, $orderId);
        $drinkProductSQL = \sprintf($productSQL, $drinkId, $orderId);

        try {
            $db->exec($foodProductSQL);
            $db->exec($drinkProductSQL);
            $message = 'Votre commande a été acceptée.';
        } catch (\Exception $e) {
            $db->exec(\sprintf('DELETE FROM orders WHERE order = %s', $uniqId));

            $message = 'Probleme lors de l\'enregistrement de votre commande' ;
        }

    }

}

?>
